<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use Notifiable;

    protected $guard = 'company';

    protected $fillable = [
        'name', 'email', 'company_name', 'password', 'phone', 'otp_code', 'otp_verified_at',
        'country', 'state', 'city', 'pincode', 'street'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'otp_verified_at' => 'datetime',
    ];
}