<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberGroupsController extends Controller
{
    public function index()
    {
        return view('admin.administrator.member_groups');
    }
} 