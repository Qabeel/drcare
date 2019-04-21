<?php

namespace App\Http\Controllers;

use App\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index()
    {
        $specializations = Specialization::all();

        return $specializations;
    }

    public function show($id)
    {
        $specialization = Specialization::find($id);

        $doctor = $specialization->Doctor;

        return $specialization;
    }

}
