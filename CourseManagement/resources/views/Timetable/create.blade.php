@extends('layouts.app')
@section('content')
    <h2 style="text-align: center">TimeTable</h2>
    <form method="POST" action="/timetable">
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
        <h5>Time</h5>
        <div class="form-row"> 
            <div class="form-group col-md-6">
                <label for="start_time">Start Time</label>
                <input type="time" class="form-control" id="start_time" name="start_time"
                    value="{{ old('start_time') }}">
                @error('start_time')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="end_time">End Time</label>
                <input type="time" class="form-control" id="end_time" name="end_time"
                    value="{{ old('end_time') }}">
                @error('end_time')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group"> 
                <label for="day">Day</label>
                <select class="form-control" name="day">
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
                @error('day')
                    <p style="color: red">{{ $message }}</p>
                @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
