@extends('layouts.app')

@section ('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Icons font CSS-->
    <link href="{{asset('/js/vendor-form/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/js/vendor-form/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('/js/vendor-form/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/js/vendor-form/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('/css/main-form.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Book Your Appointment</h2>
                    <form method="POST" action="/appointment/create">
                        {{csrf_field()}}
                        <!--
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div> -->
                        <div class="input-group">
                            <label class="label">Specilization</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="appointment_id">
                                    <option disabled="disabled" selected="selected">Choose Specilization</option>
                                    @foreach ($specializations as $specilization)
                                        <option value="{{specialization_id}}">{{specialization_name}}</option>    
                                    @endforeach
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Doctor</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Doctor X</option>
                                    <option>Doctor Y</option>
                                    <option>Doctor Z</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Time</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose your time</option>
                                    <option>Saturday at 18:00</option>
                                    <option>Friday at 20:00</option>
                                    <option>Sunday at 17:00</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('/js/vendor-form/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('/js/vendor-form/select2/select2.min.js')}}"></script>
    <script src="{{asset('/js/vendor-form/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('/js/vendor-form/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('/js/global-form.js')}}"></script>

</body>

</html>
<!-- end document-->
@endsection