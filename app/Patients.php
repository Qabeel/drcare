<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = ['user_id', 'phone', 'address'];
}