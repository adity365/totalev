<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSeekerProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function completeProfile()
    {
        $jobseeker = Auth::guard('jobseeker')->user();
        $profile = $jobseeker->profile;
        
        return view('jobseeker.complete-profile', compact('profile'));
    }

    public function storeProfile(Request $request)
    {
        $request->validate([
            'job_category' => 'required|string|max:255',
            'job_subcategory' => 'required|string|max:255',
            'job_sub_subcategory' => 'nullable|string|max:255',
            'description' => 'required|string|max:1000',
            'skills' => 'required|array|min:1',
            'experience_level' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
        ]);

        $jobseeker = Auth::guard('jobseeker')->user();
        
        $profile = JobSeekerProfile::updateOrCreate(
            ['jobseeker_id' => $jobseeker->id],
            [
                'job_category' => $request->job_category,
                'job_subcategory' => $request->job_subcategory,
                'job_sub_subcategory' => $request->job_sub_subcategory,
                'description' => $request->description,
                'skills' => $request->skills,
                'experience_level' => $request->experience_level,
                'education_level' => $request->education_level,
                'profile_completed' => true,
            ]
        );

        return redirect()->route('jobseeker.dashboard')->with('success', 'Profile completed successfully!');
    }

    public function editProfile()
    {
        $jobseeker = Auth::guard('jobseeker')->user();
        $profile = $jobseeker->profile;
        
        return view('jobseeker.edit-profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'job_category' => 'required|string|max:255',
            'job_subcategory' => 'required|string|max:255',
            'job_sub_subcategory' => 'nullable|string|max:255',
            'description' => 'required|string|max:1000',
            'skills' => 'required|array|min:1',
            'experience_level' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
        ]);

        $jobseeker = Auth::guard('jobseeker')->user();
        
        if ($jobseeker->profile) {
            $jobseeker->profile->update([
                'job_category' => $request->job_category,
                'job_subcategory' => $request->job_subcategory,
                'job_sub_subcategory' => $request->job_sub_subcategory,
                'description' => $request->description,
                'skills' => $request->skills,
                'experience_level' => $request->experience_level,
                'education_level' => $request->education_level,
            ]);
        }

        return redirect()->route('jobseeker.dashboard')->with('success', 'Profile updated successfully!');
    }
}
