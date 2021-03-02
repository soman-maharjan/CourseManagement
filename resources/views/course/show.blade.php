@extends('layouts.app')
@section('content')
    <div class="shadow p-3 mb-5 bg-white rounded" style="background: white">
        <h3>{{ $course->title }}</h3>
        <hr>
        <h5>Description :</h5>
        <p>{{ $course->description }}</p>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Cost : {{ $course->cost }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Number of Semesters : {{ $course->semester }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Credits : {{ $course->credit_score }}</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Start Date : {{ $course->start_date }}</h5>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h5>End Date : {{ $course->end_date }}</h5>
            </div>
        </div>
        <hr>
        <div style="display: flex">
            <a href="/course/{{ $course->id }}/edit"><button class="btn btn-primary" style="width:100px">Edit</button>
            </a>
            <form action="/course/{{ $course->id }}" method="POST" style="margin-left: 10px;">
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" style="width:100px">Delete</button>
            </form>
        </div>
    </div>
@endsection
