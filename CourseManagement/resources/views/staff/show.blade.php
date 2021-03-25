@extends('layouts.app')
@section('content')
    <div class="shadow p-3 mb-4 bg-white rounded" style="background: white">
        <h3>{{ $staff->first_name }} {{ $staff->middle_name }} {{ $staff->last_name }}</h3>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Gender : {{ $staff->gender }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Date Of Birth : {{ $staff->date_of_birth }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Date Joined : {{ $staff->date_joined }}</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Phone Number : {{ $staff->number }}</h5>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h5>Email : {{ $staff->email }}</h5>
            </div>
        </div>
        <hr>
        <h5>Address: {{ $staff->address }}</h5>

    </div>
    <div class="shadow p-3 mb-5 bg-white rounded" style="background: white">
        <h5>Job Title: {{ $staff->job_title }}</h5>
        <hr>
        <h5>Salary : {{ $staff->salary }}</h5>
        <div style="display: flex">
            <a href="/staff/{{ $staff->id }}/edit"><button class="btn btn-primary" style="width:100px">Edit</button>
            </a>
            <form action="/staff/{{ $staff->id }}" method="POST" style="margin-left: 10px;">
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" style="width:100px">Delete</button>
            </form>
        </div>
    </div>
@endsection
