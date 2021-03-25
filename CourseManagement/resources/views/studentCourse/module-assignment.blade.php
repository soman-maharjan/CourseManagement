@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Courses</li>
            <li class="breadcrumb-item"><a href="{{ url()->previous() }}"> {{ $module->title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Assignments</li>
        </ol>
    </nav>
    @if (count($module->assignment) == 0)
        <br>
        <h4 class="d-flex justify-content-center">No Assignment Posted!</h4>
    @endif
    <div>
        @foreach ($module->assignment as $assignment)
            <div class="card assignment-card">

                <h5 class="card-header text-light bg-dark">{{ $assignment->title }} ( {{ $assignment->module->title }} )
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="card-title text-muted">{{ $assignment->module->staff->first_name }}
                                {{ $assignment->module->staff->last_name }} &#183;
                                {{ date('d-m-Y', strtotime($assignment->created_at)) }}</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="card-title text-muted" style="float: right">Submission Date:
                                {{ date('d-m-Y', strtotime($assignment->submission_date)) }}</h6>
                        </div>
                    </div>
                    <hr class="card-hr-upper">
                    <p class="card-text">{{ $assignment->description }}</p>
                    <p class="card-text">Attached file: {{ $assignment->assignment_file }}</p>
                    <a href="/storage/assignment_file/{{ $assignment->assignment_file }}"><button
                            class="btn btn-success">Download
                            Attached File</button></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
