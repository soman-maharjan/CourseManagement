@extends('layouts.app')
@section('content')
<h3 class="d-flex justify-content-center">About this module</h3>
<div class="container-fluid py-4 about-module col-md-9" style="background: #fff">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Module Code</b> </h5> 
                </div>
                <div class="col-md-6">
                    <h5>{{$module->module_code}}</h5> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Module Title</b> </h5> 
                </div>
                <div class="col-md-6">
                    <h5>{{$module->title}}</h5> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Lecturer</b> </h5> 
                </div>
                <div class="col-md-6">
                    <h5>{{$module->staff->first_name}} {{$module->staff->last_name}}</h5> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Start Date</b> </h5> 
                </div>
                <div class="col-md-6">
                    <h5>{{$module->start_date}}</h5> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>End Date</b> </h5> 
                </div>
                <div class="col-md-6">
                    <h5>{{$module->end_date}}</h5> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Description</b> </h5> 
                </div>
                <div class="col-md-6">
                    <h5>{{$module->description}}</h5> 
                </div>
            </div>
            <button>View Assignments</button>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
@endsection