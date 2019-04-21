<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;

class AppointmentController extends Controller
{

    public function index (){

        $appointments = appointment::all();
        $specialization = Specialization::all();
    }


    public function create(){

        //$companies = null;
        //if(!company_id){

            $specialization = Specialization::all();
            $specialization = Specialization::where('specialization_id' , $specialization_id);

        //}
        return view ('pages.appointments.create',['specialization_id'->$specialization_id,'specialization_name'->$specializations]);



        //return view ('pages.appointments.create');
    }

}


    /*public function store (){

        $appointment = new appointment ();


        $appointment->doctor_id =   request('chosen doctor id');
        $appointment->date =        request('chosen date');

        $appointment->patient_id =  request('logged in user id');
        $appointment->birthdate =   request('logged in user BD');
        $appointment->gender =      request('logged in user gender');
        $appointment->phonenumber = request('logged in user Pnumber');
        $appointment->email =       request('logged in user mail');
        $appointment->fname =       request('logged in user fname');
        $appointment->lname =       request('logged in user lname');

        

    }*/

