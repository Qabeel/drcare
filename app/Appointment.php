<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id' , 'doctor_id' , 'date' , 'birthdate', 'gender' , 'email' ,'phone_number','first_name','last_name'
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
