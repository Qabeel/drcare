<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){

        return view ('pages.index');

    }

    public function about (){

        return view ('pages.about');

    }

    public function contact (){

        return view ('pages.contact');

    }

    public function department (){

        return view ('pages.department');

    }

    public function doctors (){

        return view ('pages.doctors');

    }

    public function profile(){
        return view('pages.profile');
    }

    public function appointment(){
        return view('pages.appointments.appointment');
    }

    
}
