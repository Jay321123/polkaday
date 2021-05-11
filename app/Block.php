<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = [
        'block_letter'
    ];


    public function lots(){
        return $this->hasMany(Lot::class);
    }
}
