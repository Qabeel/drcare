<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\DoctorTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
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

        $request['patient_id'] = $patient_id;

        $appointment = Appointment::create($request->all());

        $appointment->save();

        if ($appointment)
        {
            $doctorTime = DoctorTime::find($request->time);
            $doctorTime->update(['is_taken'] , 1);
            $doctorTime->save();
            return response()->json('The Appointment has been Done');
        }
        else{
            return response()->json('The Appointment has not been Done');
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
