@extends('layouts.app')
@section('content')
    <h2>Edit Attendance Record</h2>
    <form method="POST" action="{{ route('attendance.update', [$attendance->id]) }}">
        @csrf
        @method('PUT')
        <br>
        <h5>Student's Name: {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</h5>
        <h5>Module: {{ $attendance->module->title }}</h5>
        <br>
        <input type="number" hidden name="module_id" value="{{ $attendance->student_id }}">
        <input type="number" hidden name="student_id" value="{{ $attendance->module_id }}">

        <div class="form-group">
            <label for="status">Status</label> <br>
            Present
            <input type="radio" name="status" value="1">
            Absent
            <input type="radio" name="status" value="0">
            @error('status')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="attendance_date">Date</label>
            <input type="date" class="form-control" name="attendance_date" value="{{ $attendance->attendance_date }}">
            @error('attendance_date')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
