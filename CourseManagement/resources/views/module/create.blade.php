@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">ENTER MODULE DETAILS</h3><br>
    <form method="POST" action="/module">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" placeholder="F/M"
                    value="{{ old('start_date') }}">
                @error('start_date')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="end_date" placeholder="2020-12-9" name="end_date"
                    value="{{ old('end_date') }}">
                @error('end_date')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">

            <label for="module_leader">Module Leader</label>
            <select class="form-control" name="module_leader">

                @foreach ($staffs as $staff)
                    <option value="{{ $staff->id }}">
                        {{ $staff->first_name }} {{ $staff->last_name }}
                    </option>
                @endforeach
            </select>
            @error('module_leader')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="module_id">Select Course (Use Ctrl + to select multiple Options)</label><br>
            <select multiple size="3" class="course_id" name="course_id[]">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
            @error('module_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="module_code">Module Code</label>
            <input type="text" class="form-control" id="module_code" name="module_code" value="{{ old('module_code') }}">
            @error('module_code')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="credit_score">Credit Score</label>
            <input type="number" class="form-control" id="credit_score" name="credit_score"
                value="{{ old('credit_score') }}">
            @error('credit_score')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description"
                name="description">{{ old('description') }}</textarea>
            @error('description')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
