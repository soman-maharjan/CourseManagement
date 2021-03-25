@extends('layouts.app')
@section('content')
    <h2>New Attendance Record</h2>
    <form method="POST" action="/attendance">
        @csrf
        <div class="form-group">
            <label for="module_id">Module</label>
            <select class="form-control" name="module_id">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">
                        {{ $module->title }}
                    </option>
                @endforeach
            </select>
            @error('module_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="student_id">Student</label>
            <select class="form-control" name="student_id">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
            @error('student_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
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
            <input type="date" class="form-control" name="attendance_date" value="{{ old('attendance_date') }}">
            @error('attendance_date')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
