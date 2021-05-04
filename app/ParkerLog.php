<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkerLog extends Model
{
    protected $fillable = [
        'student_id',
        'dateTime_in',
        'dateTime_out',
        'dateTime_in',
        'plate_number'
    ];

    public function parker(){
        return $this->belongsTo(Parkers::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
