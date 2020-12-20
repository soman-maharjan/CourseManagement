@extends('layouts.app')
@section('content')
<h2>Courses</h2>
@foreach($student->course->module as $module)
<div class="row" style="margin-top:15px;margin-bottom:15px">
    <div class="col-sm-12" >
        <div class="card">
            <div class="card-body module-border" >
                <p class="text-muted" style="padding: 0px;margin:0px">{{$module->module_code}}</p>
                <a class="card-title" href="/student-module/{{$module->id}}" style="font-size: 20px">{{($module->title)}}</a>
                <p class="card-text">{{$module->description}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection