@extends('layouts.app')

@section ('content')
    <div class="p-t-15">
        <button class="btn btn--radius-2 btn--blue" type="submit"><a href="{{ url('/appointment/create') }}">Book</button>
    </div>
@endsection