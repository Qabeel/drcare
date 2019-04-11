<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id' , 'doctor_id' , 'day' , 'time'
    ];

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
