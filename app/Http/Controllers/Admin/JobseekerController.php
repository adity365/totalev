<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    public function index()
    {
        return view('admin.jobseekers.index');
    }

    public function paid()
    {
        return view('admin.jobseekers.paid');
    }
} 