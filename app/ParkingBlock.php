<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingBlock extends Model
{
    protected $illable = [
        'block_name',
        'slots',
        'parking_type'
    ];
}
