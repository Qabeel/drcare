<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|number',
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
        ]);

        if ($validator->fails()) {
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }
        $patient_id = Auth::user()->id;

        $patient_id = $request['patient_id'];
        $appointment = Appointment::create($request->all());

        $appointment->save();

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
