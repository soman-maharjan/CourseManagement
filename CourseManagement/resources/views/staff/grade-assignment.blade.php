@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Grade Assignment</a></li>
        </ol>
    </nav>

    @if (Session::has('alert'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('alert') }}
        </div>
    @endif
    <div>
        @foreach ($modules as $module)
            <br>
            @foreach ($module->report as $assignment)
                @if ($assignment->grade == null)
                    <div class="card assignment-card">
                        <h5 class="card-header text-light bg-dark">{{ $assignment->title }} ({{ $module->title }})</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="card-title text-muted">Submitted by: {{ $assignment->student->first_name }}
                                        {{ $assignment->student->last_name }}
                                    </h6>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="card-title text-muted" style="float: right">Submitted On:
                                        {{ date('d-m-Y', strtotime($assignment->created_at)) }}</h6>
                                </div>
                            </div>
                            <hr class="card-hr-upper">
                            <p class="card-text">Attached file: {{ $assignment->student_assignment }}</p>
                            <p class="card-text">Description: {{ $assignment->description }}</p>
                            <a href="/storage/assignment_file/{{ $assignment->student_assignment }}"><button
                                    class="btn btn-primary">Download
                                    Attached File</button></a>
                            <form action="/grade" enctype="multipart/form-data" method="POST">
                                @csrf
                                <hr>
                                <div class="form-group">
                                    <h5 class="d-flex justify-content-center">Evaluate Assignment</h5>
                                    <label for="grade">Grade</label>
                                    <input type="text" class="form-control" id="grade" placeholder="A+/A/A-/B+/B/B-"
                                        name="grade" value="{{ old('grade') }}">
                                    @error('grade')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="feedback">Feedback</label> <br>
                                    <textarea name="feedback" id="feedback" cols="50" rows="3"></textarea>
                                    @error('feedback')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <input type="hidden" value="{{ $module->id }}" name="module_id">
                                <input type="hidden" value="{{ $assignment->id }}" name="report_id">
                                <br>
                                <button class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
@endsection
