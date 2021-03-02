@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">EDIT COURSE RECORD</h3><br>
    <form method="POST" action="/course/{{ $course->id }}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}">
                @error('title')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="semester">Semester</label>
                <input type="number" class="form-control" id="semester" name="semester" value="{{ $course->semester }}">
                @error('semester')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $course->description }}</textarea>
            @error('description')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">

            <label for="module_leader">Course Leader</label>
            <select class="form-control" name="course_leader">

                @foreach ($staffs as $staff)
                    <option value="{{ $staff->id }}">
                        {{ $staff->first_name }} {{ $staff->last_name }}
                    </option>
                @endforeach
            </select>
            @error('course_leader')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="credit_score">Credit Score</label>
                <input type="number" class="form-control" id="credit_score" name="credit_score"
                    value="{{ $course->credit_score }}">
                @error('credit_score')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="cost">Cost</label>
                <input type="number" class="form-control" id="cost" name="cost" value="{{ $course->cost }}">
                @error('cost')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="module_id">Select Module (Use Ctrl + to select multiple Options)</label><br>
            <select multiple size="3" class="module_id" name="module_id[]">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->title }}</option>
                @endforeach
            </select>
            @error('module_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date"
                    value="{{ $course->start_date }}">
                @error('start_date')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $course->end_date }}">
                @error('end_date')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
