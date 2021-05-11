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
<<<<<<< HEAD
        'plate_number',
        'owner_name',
=======
        'plate_number'
>>>>>>> parent of 9fc548e (updated database and logs)
    ];

    public function parker(){
        return $this->belongsTo(Parkers::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
