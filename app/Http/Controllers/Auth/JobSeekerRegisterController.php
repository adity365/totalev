<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class JobSeekerRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.jobseeker-register');
    }

    public function register(Request $request)
    {
        // Debug: Log the request data
        \Log::info('JobSeeker Registration Request:', $request->all());
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:job_seekers',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string|max:15|unique:job_seekers,phone',
            'otp' => 'required|string|size:6',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'street_address' => 'nullable|string|max:500',
        ], [
            'mobile.unique' => 'This phone number is already registered.',
            'email.unique' => 'This email address is already registered.',
            'password.confirmed' => 'Password confirmation does not match.',
            'otp.required' => 'Please enter the OTP sent to your mobile.',
            'otp.size' => 'OTP must be 6 digits.',
        ]);

        // Verify OTP
        $jobseeker = JobSeeker::where('phone', $request->mobile)->first();
        if (!$jobseeker || $jobseeker->otp_code !== $request->otp) {
            return back()->withErrors(['otp' => 'Invalid OTP. Please check and try again.'])->withInput();
        }

        // Check if OTP is expired (15 minutes)
        if ($jobseeker->otp_verified_at && now()->diffInMinutes($jobseeker->otp_verified_at) > 15) {
            return back()->withErrors(['otp' => 'OTP has expired. Please request a new one.'])->withInput();
        }

        try {
            // Update the jobseeker with final registration data
            $jobseeker->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'street' => $request->street_address,
                'otp_verified_at' => now(),
            ]);

            \Log::info('JobSeeker created successfully:', ['id' => $jobseeker->id]);

            // Auto-login the user after registration
            Auth::guard('jobseeker')->login($jobseeker);

            // Redirect to profile completion form
            return redirect()->route('jobseeker.profile.complete')->with('success', 'Registration successful! Please complete your profile.');
        } catch (\Exception $e) {
            \Log::error('JobSeeker registration error:', ['error' => $e->getMessage()]);
            return back()->withErrors(['error' => 'Registration failed. Please try again.'])->withInput();
        }
    }

    public function sendOTP(Request $request)
    {
        \Log::info('OTP request received:', $request->all());
        
        try {
            $request->validate([
                'mobile' => 'required|string|max:15|unique:job_seekers,phone',
                'email' => 'required|email|unique:job_seekers,email',
                'name' => 'required|string|max:255',
            ], [
                'mobile.unique' => 'This phone number is already registered.',
                'email.unique' => 'This email address is already registered.',
            ]);

            // Generate 6-digit OTP
            $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            \Log::info('Generated OTP:', ['otp' => $otp]);

            // Create or update jobseeker with OTP and required fields
            $jobseeker = JobSeeker::updateOrCreate(
                ['phone' => $request->mobile],
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make('temp_password_' . time()), // Temporary password
                    'otp_code' => $otp,
                    'otp_verified_at' => null,
                ]
            );

            \Log::info('JobSeeker record created/updated:', ['id' => $jobseeker->id, 'phone' => $jobseeker->phone]);

            // Send OTP via email
            try {
                \Mail::raw("Your OTP for registration is: {$otp}\n\nThis OTP is valid for 15 minutes.", function($message) use ($request) {
                    $message->to($request->email)
                            ->subject('Registration OTP - VacantTree');
                });
                
                \Log::info('OTP email sent successfully to:', ['email' => $request->email]);
            } catch (\Exception $e) {
                \Log::error('Email sending failed:', ['error' => $e->getMessage()]);
                // Continue even if email fails, OTP is logged
            }

            return response()->json([
                'success' => true,
                'message' => 'OTP sent to your email! (Check logs for OTP: ' . $otp . ')'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('OTP validation error:', ['errors' => $e->errors()]);
            return response()->json([
                'success' => false,
                'message' => 'Validation failed: ' . implode(', ', array_flatten($e->errors()))
            ], 422);
        } catch (\Exception $e) {
            \Log::error('OTP sending error:', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to send OTP. Please try again. Error: ' . $e->getMessage()
            ], 500);
        }
    }
} 