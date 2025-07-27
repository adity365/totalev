<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\DB;


class JobSeekerController extends Controller
{
    public function index(Request $request)
    {
        // Fetch only jobseekers based on role
        $jobseekers = JobSeeker::paginate(3);

        $cities = DB::table('cities')->pluck('city_name', 'city_id');
        $areas = DB::table('areas')->pluck('area_name', 'area_id');
        // If AJAX request, return partial view only
        if ($request->ajax()) {
            return view('frontend.jobseeker_block._jobseeker_block', compact('jobseekers', 'cities', 'areas'))->render();
        }

        // Otherwise, show main view
        return view('frontend.index', compact('jobseekers', 'cities', 'areas'));
    }
}
