<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $primaryKey = 'area_id';

    protected $fillable = [
        'area_name', 'area_id', 'city_id', 'state_id', 'country_id',
    ];
}
