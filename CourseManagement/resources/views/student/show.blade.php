@extends('layouts.app')
@section('content')
    <div class="shadow p-3 mb-4 bg-white rounded" style="background: white">
        <h3>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</h3>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Student Id : {{ $student->student_id }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Date Of Birth : {{ $student->date_of_birth }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Date Joined : {{ $student->date_joined }}</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Phone Number : {{ $student->mobile_number }}</h5>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h5>Email : {{ $student->email }}</h5>
            </div>
        </div>
        <hr>
        <h5>Address: {{ $student->address }}</h5>

    </div>
    <div class="shadow p-3 mb-5 bg-white rounded" style="background: white">
        <h5>Course Enrolled: {{ $student->course->title }}</h5>
        <hr>
        @if ($student->staff != null)
            <h5>Personal Tutor : {{ $student->staff->first_name }} {{ $student->staff->last_name }}</h5> <br>
        @else
            <h5>Personal Tutor : Personal Tutor has not been assigned!</h5>
        @endif
        <div style="display: flex">
            <a href="/student/{{ $student->id }}/edit"><button class="btn btn-primary" style="width:100px">Edit</button>
            </a>
            <form action="/student/{{ $student->id }}" method="POST" style="margin-left: 10px;">
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" style="width:100px">Delete</button>
            </form>
        </div>
    </div>
@endsection
