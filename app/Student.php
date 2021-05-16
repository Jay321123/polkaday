<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'id_number',
        'course'
    ];

    public function logs(){
        return $this->hasMany(ParkerLog::class);
    }
}
