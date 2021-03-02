@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">EDIT ASSIGNMENT</h3><br>
    <form method="POST" action="/assignment/{{ $assignment->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title"
                value="{{ $assignment->title }}">
            @error('title')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" placeholder="About Course"
                name="description">{{ $assignment->description }}</textarea>
            @error('description')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="submission_date">Submission Date</label>
            <input type="date" class="form-control" id="submission_date" name="submission_date"
                value="{{ $assignment->submission_date }}">
            @error('submission_date')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="assignment_file">File</label> <br>
            Current File: {{ $assignment->assignment_file }}
            <input type="file" class="form-control" id="assignment_file" placeholder="Credit Score" name="assignment_file">
            @error('assignment_file')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="module_id">Select Module</label><br>
            <select size="3" class="module_id" name="module_id">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->title }}</option>
                @endforeach
            </select>
            @error('module_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
