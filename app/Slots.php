<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slots extends Model
{
    protected $fillable = [
        'slot_name',
        'parking_block_id',
        'status'
    ];
}
