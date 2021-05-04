<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $fillable = [
        'brand_name',
        'model'
        // 'vechicle_type',

    ];
}
