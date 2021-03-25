@extends('layouts.app')
@section('content')

    <h3 style="text-align: center">ENTER STUDENT DETAILS</h3><br>
    <form method="POST" action="/student">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="middle_name">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name"
                    value="{{ old('middle_name') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="F/M"
                    value="{{ old('gender') }}">
                @error('gender')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" placeholder="2020-12-9" name="date_of_birth"
                    value="{{ old('date_of_birth') }}">
                @error('date_of_birth')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="student_id">Student Id</label>
            <input type="text" class="form-control" id="student_id" placeholder="20416264" name="student_id"
                value="{{ old('student_id') }}">
            @error('student_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_joined">Date Joined</label>
            <input type="date" class="form-control" id="date_joined" placeholder="2020-12-9" name="date_joined"
                value="{{ old('date_joined') }}">
            @error('date_joined')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">

            <label for="course_id">Course</label>
            <select class="form-control" name="course_id">

                @foreach ($courses as $key => $value)
                    <option value="{{ $key }}">
                        {{ $value }}
                    </option>
                @endforeach
            </select>
            @error('course_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="admin@admin.com" name="email"
                    value="{{ old('email') }}">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="mobile_number">Number</label>
                <input type="number" class="form-control" id="mobile_number" placeholder="9800000000" name="mobile_number"
                    value="{{ old('mobile_number') }}">
                @error('mobile_number')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            @error('address')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
