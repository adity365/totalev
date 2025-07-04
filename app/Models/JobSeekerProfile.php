<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobseeker_id',
        'job_category',
        'job_subcategory',
        'job_sub_subcategory',
        'description',
        'skills',
        'experience_level',
        'education_level',
        'resume_file',
        'profile_picture',
        'profile_completed'
    ];

    protected $casts = [
        'profile_completed' => 'boolean',
        'skills' => 'array'
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}
