@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">ASSIGN TUTOR</h3><br>
    <form method="POST" action="/personal-tutor">
        @csrf
        <div class="form-group">
            <label for="staff_id">Personal Tutor:</label>
            <select class="form-control" name="staff_id">
                @foreach ($staffs as $staff)
                    <option value="{{ $staff->id }}">
                        {{ $staff->first_name }} {{ $staff->last_name }}
                    </option>
                @endforeach
            </select>
            @error('staff_id')
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

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
