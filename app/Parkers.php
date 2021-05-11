<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkers extends Model
{
    protected $fillable = [
        'school_id',
        'plate_number',
        'vehicle_model_id',
        'brand',
        'qr_number',
        'isValid',
        'owner_name',
        'phone_number',
        'vehicle_category_id'
    ];

    public function parkerlogs(){
        return $this->hasMany(ParkerLog::class,'parker_id','id');
    }

    public function vehicle_model(){
        return $this->belongsTo(VehicleModel::class);
    }

    public function vehicle_category(){
        return $this->belongsTo(VehicleCategory::class,'vehicle_category_id','id');
    }

  
}
