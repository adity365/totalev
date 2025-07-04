<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class JobSeeker extends Authenticatable
{
    use Notifiable;

    protected $guard = 'jobseeker';

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'otp_code', 'otp_verified_at',
        'country', 'state', 'city', 'pincode', 'street'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'otp_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(JobSeekerProfile::class);
    }
}