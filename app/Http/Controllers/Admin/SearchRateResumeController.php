<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchRateResumeController extends Controller
{
    public function index()
    {
        return view('admin.search.rate_resume');
    }
} 