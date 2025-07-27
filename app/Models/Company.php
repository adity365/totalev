<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'company';

    protected $fillable = [
        'name', 'phone', 'email', 'password', 'otp_code', 'otp_verified_at',
        'city', 'area', 'pincode', 'street', 'referer_email', 'privacy', 'newsletter', 'whatsapp',
        'company_name', 'company_type', 'position', 'industry', 'company_profile', 'gst_no', 'website', 'logo_path',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'otp_verified_at' => 'datetime',
    ];
}