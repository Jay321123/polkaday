<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
   protected $fillable = [
    'name',
    'vehicle_category_id'
   ];

   public function cat(){
      return $this->belongsTo(VehicleCategory::class,'vehicle_category_id','id');
   }
}
