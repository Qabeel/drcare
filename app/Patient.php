<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name' , 'phone' , 'address'
    ];

    public function Appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
