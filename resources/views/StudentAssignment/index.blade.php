@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h4 style="margin-top: 10px">Modules</h4>
    @foreach($student->course->module as $module)
    <div class="card">
        <div class="card-body">
            <a class="card-title" href="/student-module-assignment/{{$module->id}}"
                style="font-size: 20px">{{($module->title)}}</a>
        </div>
    </div>
    <br>
    @endforeach
</div>
@endsection