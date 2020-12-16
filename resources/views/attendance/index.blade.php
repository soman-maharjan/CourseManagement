@extends('layouts.app')
@section('content')
@if(Session::has('alert'))
<div class="alert alert-success" role="alert">
    {{Session::get('alert')}}
</div>
@endif
<div>
    <a href="/attendance/create"><button class="btn btn-success create-button">Create a new Record</button></a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Module</th>
            <th scope="col">Attendance Status</th>
            <th scope="col">Date</th>
            <th scope="col">Report</th>
        </tr>
    </thead>
    <tbody>
        @if(count($attendances)>0)
        @foreach ($attendances as $attendance)
        <tr>
            <th scope="row">{{$attendance->student->first_name}} {{$attendance->student->last_name}}</th>
            <td>{{$attendance->module->title}}</td>
            <td>
                @if((int)$attendance->status)
                    <span class="alert alert-success">Present</span> 
                @else
                    <span class="alert alert-danger">Absent</span>
                @endif
            </td>
            <td>{{$attendance->attendance_date}}</td>
            <td>
                <form method="POST" action="/attendance/report" accept-charset="UTF-8">
                    @csrf
                    <input name="student_id" type="hidden" value="{{$attendance->id}}">
                    <button class="btn btn-danger" style="padding:2px;width:60px">Report</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="5" class="text-center">No records found</td>
        </tr>
        @endif
    </tbody>
</table>

@endsection