<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('frontend.index');
    }

    public function terms(): View
    {
        return view('frontend.terms');
    }

    public function privacyPolicy(): View
    {
        return view('frontend.privacy-policy');
    }
}
