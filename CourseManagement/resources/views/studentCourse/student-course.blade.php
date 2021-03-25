@extends('layouts.app')
@section('content')

    <h2>Course : {{ $student->course->title }}</h2>
    <div class="container-fluid">
        <h4 style="margin-top: 30px">Modules</h4>
        @foreach ($student->course->module as $module)
            <div class="row" style="margin-top:15px;margin-bottom:15px">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body module-border">
                            <p class="text-muted" style="padding: 0px;margin:0px">{{ $module->module_code }}</p>
                            <a class="card-title" href="/student-module/{{ $module->id }}"
                                style="font-size: 20px">{{ $module->title }}</a>
                            <p class="card-text">{{ $module->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
