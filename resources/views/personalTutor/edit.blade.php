@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">EDIT PERSONAL TUTOR</h3><br>
    <form method="POST" action="/personal-tutor">
        @csrf
        <h5>Student's name : {{ $student->first_name }} {{ $student->last_name }}</h5> <br>
        <input type="number" hidden value="{{ $student->id }}" name="student_id">
        <div class="form-group">
            <label for="staff_id">Assign a new Personal Tutor:</label>
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
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
