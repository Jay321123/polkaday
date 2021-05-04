<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkers extends Model
{
    protected $fillable = [
        'school_id',
        'plate_number',
        'vehicle_type',
        'brand',
        'qr_number',
        'isValid',
        'owner_name'
    ];

    public function parkerlogs(){
        return $this->hasMany(ParkerLog::class,'parker_id','id');
    }

    public function vehicles(){
        return $this->hasMany(Vehicle::class,'parker_id','id');
    }
}
