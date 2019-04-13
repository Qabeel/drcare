<?php

namespace App\Http\Controllers;

use App\DoctorTime;
use Illuminate\Http\Request;

class DoctorTimeController extends Controller
{
    public function index()
    {
        $doctorTimes = DoctorTime::all()->where('is_taken' , 0);

        return $doctorTimes ;
    }

    public function show($id)
    {
        $doctorTime = DoctorTime::all()->where('is_taken' , 0)->find($id);

        if($doctorTime)
        {
            $doctorTime->Doctor;

            return $doctorTime;
        }
        else{
            return response()->json('This time is unavailable');
        }

    }
}
