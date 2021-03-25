@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Assignments</a></li>
    </ol>
</nav>
    <div class="container-fluid">
        <h4 style="margin-top: 10px">Modules</h4>
        <div class="row">
            @foreach ($student->course->module as $module)
                <div class="col-sm-6">
                    <div class="card" style="margin-bottom: 20px">
                        <div class="card-header text-light bg-dark">
                            {{ $module->title }}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $module->description }}</p>
                            <a class="btn btn-primary" href="/student-module-assignment/{{ $module->id }}">View
                                Assignment</a>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
