<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();

        return $doctors ;
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);

        $doctorTime = $doctor->DoctorTime;

        return $doctor;
    }
}
