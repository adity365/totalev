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
            'password' => 'required|string|min:6',
            'mobile' => 'required|string|max:15|unique:job_seekers,phone',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'street_address' => 'nullable|string|max:500',
        ], [
            'mobile.unique' => 'This phone number is already registered.',
            'email.unique' => 'This email address is already registered.',
        ]);

        try {
            $jobseeker = JobSeeker::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->mobile,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'street' => $request->street_address,
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
} 