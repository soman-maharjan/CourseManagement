@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">EDIT STAFF RECORD</h3>
    <form method="POST" action="/staff/{{ $staff->id }}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $staff->first_name }}">
                @error('first_name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="middle_name">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name"
                    value="{{ $staff->middle_name }}">
            </div>
            <div class="form-group col-md-4">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $staff->last_name }}">
                @error('last_name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="F/M"
                    value="{{ $staff->gender }}">
                @error('gender')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" placeholder="2020-12-9" name="date_of_birth"
                    value="{{ $staff->date_of_birth }}">
                @error('date_of_birth')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="e.g. admin@admin.com" name="email"
                    value="{{ $staff->email }}">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="number">Number</label>
                <input type="number" class="form-control" id="number" placeholder="9800000000" name="number"
                    value="{{ $staff->number }}">
                @error('number')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $staff->address }}">
            @error('address')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="job_title">Job Position</label>
                <input type="job_title" class="form-control" id="job_title" placeholder="Manager" name="job_title"
                    value="{{ $staff->job_title }}">
                @error('job_title')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="salary">Salary</label>
                <input type="number" class="form-control" id="salary" placeholder="55000" name="salary"
                    value="{{ $staff->salary }}">
                @error('salary')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="date_joined">Date Joined</label>
                <input type="date" class="form-control" id="date_joined" placeholder="2/10/2015" name="date_joined"
                    value="{{ $staff->date_joined }}">
                @error('date_joined')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
