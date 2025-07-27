<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'jobseeker';

    protected $fillable = [
        'name', 'phone', 'email', 'password', 'otp_code', 'otp_verified_at',
        'city', 'area', 'pincode', 'street', 'referer_email', 'privacy', 'newsletter', 'whatsapp',
        'gender', 'dob', 'work_status', 'experience_years', 'education', 'job_type',
        'job_category', 'job_subcategory', 'job_sub_subcategory', 'job_roles', 'job_skills',
        'cv_path', 'profile_photo_path',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'otp_verified_at' => 'datetime',
    ];

    // Remove the hasOne relationship to JobSeekerProfile
    // Add all fillable fields for jobseekers table
    // No relationship to JobSeekerProfile
}