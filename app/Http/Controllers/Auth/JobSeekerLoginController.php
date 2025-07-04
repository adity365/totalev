<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobSeekerLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.jobseeker-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('jobseeker')->attempt($credentials)) {
            return redirect()->intended('/jobseeker/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid login credentials.']);
    }
}
