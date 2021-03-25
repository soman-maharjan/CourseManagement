@extends('layouts.app')
@section('content')
    <div class="shadow p-3 mb-5 bg-white rounded" style="background: white">
        <h3>{{ $assignment->title }}</h3>
        <hr>
        <h5>Description :</h5>
        <p>{{ $assignment->description }}</p>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h5>Submission Date : {{ $assignment->submission_date }}</h5>
            </div>
            <div class="col-md-6">
                <h5>Module : {{ $assignment->module->title }}</h5>
            </div>
        </div>
        <hr>
        <a href="/storage/assignment_file/{{ $assignment->assignment_file }}"><button class="btn btn-success">View
                Assigment File</button></a>
        <hr>
        <div style="display: flex">
            <a href="/assignment/{{ $assignment->id }}/edit"><button class="btn btn-primary"
                    style="width:100px">Edit</button> </a>
            <form action="/assignment/{{ $assignment->id }}" method="POST" style="margin-left: 10px;">
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" style="width:100px">Delete</button>
            </form>
        </div>
    </div>
@endsection
