<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchRecruiterController extends Controller
{
    public function index()
    {
        return view('admin.search.recruiter');
    }
} 