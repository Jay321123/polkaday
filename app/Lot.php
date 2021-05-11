<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $fillable = [
        'lot_number',
        'block_id'
    ];

    public function block(){
        return $this->belongsTo(Block::class);
    }
}
