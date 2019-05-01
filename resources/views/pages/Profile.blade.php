@extends('layouts.app')
@section('content')


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
                <h2 class="title">My Reservations</h2>
                <form method="GET">
                    {{csrf_field()}}
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">

                                @foreach($appointments as $appointment)

                                    First name: {{$appointment['first_name']}} <br>
                                    Second name: {{$appointment['last_name']}} <br>
                                    date: {{$appointment['date']}} <br>
                                    email: {{$appointment['email']}} <br>
                                    phone number: {{$appointment['phone_number']}} <br>
                                    doctor name: {{$appointment["doctor"]["name"]}} <br>

                                    -----------------------------------

                                @endforeach




                                {{--                                <label class="label">Pick Your Time</label>--}}
{{--                                <div class="rs-select2 js-select-simple select--no-search">--}}
{{--                                    <input type="date" name="subject">--}}
{{--                                    <div class="select-dropdown"></div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>

{{--                    <div class="p-t-15">--}}
{{--                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>--}}
{{--                    </div>--}}
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






@endsection