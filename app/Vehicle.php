<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable =[
        'vehicle_type_id',
        'color_id',
        'parker_id',
        'plate_number',
        'owner_name'
    ];

    public function parker(){
        return $this->belongsTo(Parkers::class,'parker_id','id');
    }

    public function vehicle_type(){
        return $this->hasOne(Vehicle::class);
    }
    public function color(){
        return $this->hasOne(Color::class);
    }
}
