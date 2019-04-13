<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorTime extends Model
{
    protected $fillable = [
        'doctor_id', 'date' , 'is_taken'
    ];

    public function Doctor()
    {
       return $this->belongsTo(Doctor::class);
    }
}
