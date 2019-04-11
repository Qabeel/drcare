<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name' , 'email' , 'specialization_id'
    ];

    public function Specialization(){
        return $this->belongsTo(Specialization::class);
    }

    public function Appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
