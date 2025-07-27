<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.company-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        \Log::info('Company Login Attempt:', $credentials);
        $user = \App\Models\Company::where('email', $credentials['email'])->first();
        \Log::info('Company Found:', ['user' => $user ? $user->toArray() : null]);
        if (Auth::guard('company')->attempt($credentials)) {
            return redirect()->intended('/company/dashboard');
        }
        return back()->withErrors(['email' => 'Invalid login credentials.']);
    }
}
