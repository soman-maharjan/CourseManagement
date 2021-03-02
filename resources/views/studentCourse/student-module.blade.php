@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Courses</a></li>
            <li class="breadcrumb-item active">{{ $module->title }}</li>
        </ol>
    </nav>
    <div class="row">
        <div class=" col-sm-2  student-nav py-4">
            <a href="/student-module-assignment/{{ $module->id }}"><button class="btn btn-success">View
                    Assignments</button></a>
        </div>
        <div class="py-4 about-module col-sm-9" style="background: #fff; padding-left:50px; float: right;">
            <h4 class="d-flex justify-content-center" style="font-weight:bold; margin-bottom:20px">About this module</h4>
            <div class="row">

                <div class="col-sm-6">

                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Module Code</b> </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>{{ $module->module_code }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Module Title</b> </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>{{ $module->title }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Lecturer</b> </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>{{ $module->staff->first_name }} {{ $module->staff->last_name }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Start Date</b> </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>{{ $module->start_date }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>End Date</b> </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>{{ $module->end_date }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Description</b> </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>{{ $module->description }}</h5>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>
@endsection
