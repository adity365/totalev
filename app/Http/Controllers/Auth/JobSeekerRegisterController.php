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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:job_seekers',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string|unique:job_seekers,phone',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'pincode' => 'nullable|string',
            'street_address' => 'nullable|string',
        ]);

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

        Auth::guard('jobseeker')->login($jobseeker);
        return redirect('/')->with('success', 'Registration successful!');
    }
} 