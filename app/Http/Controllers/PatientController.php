<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PatientController extends Controller
{
    public function create()
    {
        return view();
    }

    public function save(Request $request)
    {
        $appointment = Appointment::create($request->all());

        if ($appointment)
        {
            return response()->json('the appointment has been done');
        }
        else{
            return response()->json('the appointment hasn\'t been done');
        }
    }

    public function index()
    {
        $appointments = Appointment::all();

        return $appointments;
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);

        $patient = $appointment->Patient;
        $doctor = $appointment->Doctor;
        $specialization = $doctor->Specialization;

        return $appointment;
    }
}
