@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Report</li>
    </ol>
</nav>
    <h4>Enter Details To Generate Report</h4>
    <form method="POST" action="/report">
        @csrf
        <br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="student">Enter Student's name:</label>
                <input type="text" class="form-control" id="student" placeholder="e.g. Sujayan Raj Manandar" name="student"
                    value="{{ old('student') }}">
                @error('student')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Meeting Date:</label>
                <input type="date" class="form-control" id="date" name="date"
                    value="{{ old('date') }}">
                @error('date')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">

            <label for="reason">Reason</label>
            <select class="form-control" name="reason">
                    <option value="Not attending a personal tutorial meeting.">Not attending a personal tutorial meeting.</option>
                    <option value="Having poor or no attendance at classes.">Having poor or no attendance at classes.</option>
                    <option value="Not submitting coursework.">Not submitting coursework.</option>
            </select>
            @error('reason')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Generate Report</button>
    </form>
@endsection
