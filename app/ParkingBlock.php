<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingBlock extends Model
{
    protected $fillable = [
        'block_name',
        'parking_type'
    ];

    public function slots(){
        return $this->hasMany(Slots::class);
    }
}
