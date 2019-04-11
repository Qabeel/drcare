<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment\Doc;

class Specialization extends Model
{
    protected $fillable = [
        'title'
    ];

    public function Doctor(){
        return $this->hasMany(Doctor::class);
    }
}
