@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">ENTER ASSIGNMENT DETAILS</h3><br>
    <form method="POST" action="/assignment" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" placeholder="About Assignment"
                name="description">{{ old('description') }}</textarea>
            @error('description')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="submission_date">Submission Date</label>
            <input type="date" class="form-control" id="submission_date" name="submission_date"
                value="{{ old('submission_date') }}">
            @error('submission_date')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="assignment_file">File</label>
            <input type="file" class="form-control" id="assignment_file" name="assignment_file"
                value="{{ old('assignment_file') }}">
            @error('assignment_file')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="module_id">Select Module</label><br>
            <select class="module_id form-control" name="module_id">
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
