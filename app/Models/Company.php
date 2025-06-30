<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'mobile',
        'status',
        'inserted_at',
        'newsletter',
    ];
} 