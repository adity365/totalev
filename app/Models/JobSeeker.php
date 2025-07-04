<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class JobSeeker extends Authenticatable
{
    protected $guard = 'jobseeker';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}