<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ParkerLog extends Model
{
    protected $fillable = [
        'parker_id',
        'dateTime_in',
        'dateTime_out',
        'dateTime_in',
        'plate_number',
        'owner_name',
    ];

    public function parker(){
        return $this->belongsTo(Parkers::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
