@extends('layouts.app')
@section('content')
    <div class="shadow p-3 mb-4 bg-white rounded" style="background: white">
        <h3>{{$timetable->module->title}}</h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5>Day : {{ $timetable->day }}</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h5>Start Time : {{ $timetable->start_time }}</h5>
            </div>
            <div class="col-md-6">
                <h5>End Time : {{ $timetable->end_time }}</h5>
            </div>
        </div>
        <hr>
        
    </div>
@endsection
