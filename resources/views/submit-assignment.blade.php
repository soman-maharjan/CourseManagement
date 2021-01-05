@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Submit Assignment</a></li>
    </ol>
</nav>

<div>
    @foreach($student->course->module as $module)
    @foreach($module->assignment as $assignment)
    <div class="card assignment-card">

        <h5 class="card-header">{{$assignment->title}}</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h6 class="card-title text-muted">{{$assignment->module->staff->first_name}}
                        {{$assignment->module->staff->last_name}} &#183;
                        {{date('d-m-Y', strtotime($assignment->created_at))}}</h6>
                </div>
                <div class="col-sm-6">
                    <h6 class="card-title text-muted" style="float: right">Submission Date:
                        {{date('d-m-Y', strtotime($assignment->submission_date))}}</h6>
                </div>
            </div>
            <hr class="card-hr-upper">
            <p class="card-text">Attached file: {{$assignment->assignment_file}}</p>
            <a href="/storage/assignment_file/{{$assignment->assignment_file}}"><button class="btn btn-primary">Download
                    Attached File</button></a>
            <form action="/assignment-submit" enctype="multipart/form-data" method="POST">
                @csrf
                <hr>
                <div class="form-group">
                    <h5 class="d-flex justify-content-center">Submit Your Assignment</h5>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title"
                      value="{{old('title')}}">
                    @error('title')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label> <br>
                    <textarea name="description" id="description" cols="50" rows="3"></textarea>
                    @error('description')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                  </div>
                
                <input type="hidden" value="{{$module->id}}" name="module_id">
                <input type="hidden" value="{{$student->id}}" name="student_id">
                Upload Your Assignment : <input type="file" class="form-control" id="student_assignment"
                    name="student_assignment" value="{{old('student_assignment')}}">
                    <br>
                    <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    @endforeach
    @endforeach
</div>
@endsection
