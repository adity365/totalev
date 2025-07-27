<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class CompanyRegisterController extends Controller
{
    public function register(Request $request)
    {
        \Log::info('Company Registration Request:', $request->all());
        // Validate input

        $sessionData = Session::get('company.temp_data');
        $otp = Session::get('otp_email');
        $otp_mobile = Session::get('otp_mobile');
        $otpEmail = Session::get('otp_email_for');
        $emailOtpInput = $request->input('email_otp');
        $mobileOtpInput = $request->input('mobile_otp');

        \Log::info('OTP:', ['otp' => $otp, 'otpEmail' => $otpEmail, 'emailOtpInput' => $emailOtpInput]);
        if (!$otp || !$otpEmail || !$otp_mobile) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'OTP session expired. Please request a new OTP.']
            ], 422);
        }

        if ($otp !== $emailOtpInput) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'Invalid OTP entered.']
            ], 422);
        }

        if ($otp_mobile !== $mobileOtpInput) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'Invalid OTP entered.']
            ], 422);
        }

        if ($otpEmail !== $sessionData['email']) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'OTP does not match with this email.']
            ], 422);
        }

        if (!$sessionData) {
            return response()->json([
                'success' => false,
                'errors' => ['error' => 'Session expired or invalid. Please register again.']
            ], 422);
        }

        $finalData = array_merge($sessionData, $request->all());

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:companies,email,',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string|max:15|unique:companies,phone,',
            'city' => 'required|string|max:255',
            'area' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'street' => 'nullable|string|max:500',
            'referer_email' => 'nullable|string|max:255',
            'privacy' => 'nullable|string|max:50',
            'newsletter' => 'nullable',
            'whatsapp' => 'nullable',
            'company_name' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'company_profile' => 'nullable|string|max:255',
            'gst_no' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'logo_path' => 'nullable|string|max:255',

        ];
        $messages = [
            'mobile.unique' => 'This phone number is already registered.',
            'email.unique' => 'This email address is already registered.',
            'password.confirmed' => 'Password confirmation does not match.',
        ];

        $validated = validator($finalData, $rules, $messages)->validate();

        try {

            $logoPath = $request->hasFile('logo') ? $request->file('logo')->store('companies/logo', 'public') : null;

            $newsletter = isset($finalData['newsletter']) ? 1 : 0;
            $whatsapp = isset($finalData['whatsapp']) ? 1 : 0;

            $company = Company::create(
                [
                    'name' => $finalData['name'],
                    'email' => $finalData['email'],
                    'password' => Hash::make($finalData['password']),
                    'phone' => $finalData['mobile'],
                    'city' => $finalData['city'],
                    'area' => $finalData['area'] ?? null,
                    'pincode' => $finalData['pincode'] ?? null,
                    'street' => $finalData['street'] ?? null,
                    'referer_email' => $finalData['referer_email'] ?? null,
                    'privacy' => $finalData['privacy'] ?? null,
                    'newsletter' => $newsletter,
                    'whatsapp' => $whatsapp,
                    'company_name' => $finalData['company_name'] ?? null,
                    'company_type' => $finalData['company_type'] ?? null,
                    'position' => $finalData['position'] ?? null,
                    'industry' => $finalData['industry'] ?? null,
                    'company_profile' => $finalData['company_profile'] ?? null,
                    'gst_no' => $finalData['gst_no'] ?? null,
                    'website' => $finalData['website'] ?? null,
                    'logo_path' => $logoPath,
                ]
            );

            \Log::info('Company created/updated successfully:', ['id' => $company->id]);

            // Auto-login the company after registration
            Auth::guard('company')->login($company);

            Session::forget(['company.temp_data', 'otp_email', 'otp_email_for']);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => true, 'next' => 'company_details']);
            }

        } catch (\Exception $e) {
            \Log::error('Company registration error:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            $errorMessage = 'Registration failed. ' . $e->getMessage();
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => false, 'errors' => ['error' => $errorMessage]], 500);
            }
            return back()->withErrors(['error' => $errorMessage])->withInput();
        }
    }

    public function sendOTP(Request $request)
    {
        \Log::info('OTP request received:', $request->all());
        
        try {
            $request->merge([
                'newsletter' => $request->has('newsletter') ? 1 : 0,
                'whatsapp' => $request->has('whatsapp') ? 1 : 0,
            ]);

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:companies,email',
                'password' => 'required|string|min:6|confirmed',
                'mobile' => 'required|string|max:15|unique:companies,phone',
                'city' => 'required|string|max:255',
                'area' => 'nullable|string|max:255',
                'pincode' => 'nullable|string|max:10',
                'street' => 'nullable|string|max:500',
                'company_name' => 'required|string|max:255',
                'company_type' => 'required|string|max:255',
                'referer_email' => 'nullable|string|max:255',
                'privacy' => 'nullable|string|max:50',
                'newsletter' => 'nullable|boolean',
                'whatsapp' => 'nullable|boolean',
            ], [
                'mobile.unique' => 'This phone number is already registered.',
                'email.unique' => 'This email address is already registered.',
                'password.confirmed' => 'Password confirmation does not match.',
            ]);

            $registrationData = $request->only([
                'name', 'email', 'password', 'password_confirmation',
                'mobile', 'city', 'area', 'pincode', 'street', 'company_name', 'company_type',
                'referer_email', 'privacy', 'newsletter', 'whatsapp',
            ]);
            
            Session::put('company.temp_data', $registrationData);
            
            // Generate 6-digit OTP
            $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $otp_mobile = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            
            Session::put('otp_email', $otp);
            Session::put('otp_mobile', $otp_mobile);
            Session::put('otp_email_for', $request->email);

            \Log::info('Generated OTP:', ['otp' => $otp]);
            // Send OTP via email
            try {
                \Mail::raw("Your OTP for Recruiter Registration is:\n\n Email OTP: {$otp}\n\n Mobile OTP: {$otp_mobile}", function($message) use ($request) {
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
                'message' => 'Validation failed: ' . implode(', ', Arr::flatten($e->errors()))
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

    public function resendOtp(Request $request)
    {
        \Log::info('Resend OTP request received:', $request->all());

        try {
            $request->validate([
                'email' => 'required|email',
            ]);

            $sessionData = Session::get('company.temp_data');
            $otpEmail = Session::get('otp_email_for');

            if (!$sessionData || $otpEmail !== $request->email) {
                return response()->json([
                    'success' => false,
                    'message' => 'Session expired or email mismatch. Please restart registration.'
                ], 422);
            }

            $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $otp_mobile = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            Session::put('otp_email', $otp); // Replace previous OTP
            Session::put('otp_mobile', $otp_mobile); // Replace previous OTP

            \Log::info('Resent OTP:', ['otp' => $otp]);

            \Mail::raw("Your OTP for Recruiter Registration is:\n\n Email OTP: {$otp}\n\n Mobile OTP: {$otp_mobile}", function($message) use ($request) {
                $message->to($request->email)
                        ->subject('Resent OTP - VacantTree');
            });

            \Log::info('OTP resent email sent to:', ['email' => $request->email]);

            return response()->json([
                'success' => true,
                'message' => 'OTP resent successfully to your email.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed: ' . implode(', ', Arr::flatten($e->errors()))
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Resend OTP error:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to resend OTP. Please try again. Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateCompanyDetails(Request $request)
    {
        $user = auth('company')->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Not authenticated.'], 401);
        }
        $validated = $request->validate([
            'position' => 'nullable|string|max:255',
            'industry' => 'nullable|array',
            'industry.*' => 'nullable|string|max:255',
            'company_profile' => 'nullable|string|max:255',
            'gst_no' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:4096', // 2MB max
        ]);

        $logoPath = $request->hasFile('logo') ? $request->file('logo')->store('companies/logo', 'public') : null;
        
        $user->update([ 
            'position' => $validated['position'],
            'industry' => $validated['industry'] ?? [],
            'company_profile' => $validated['company_profile'],
            'gst_no' => $validated['gst_no'],
            'website' => $validated['website'],
            'logo_path' => $logoPath,
        ]);

        return response()->json(['success' => true, 'redirect' => route('company.dashboard')]);
    }

} 