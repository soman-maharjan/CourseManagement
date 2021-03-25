@extends('layouts.app')
@section('content')
    <div class="shadow p-3 mb-5 bg-white rounded" style="background: white">
        <h3>{{ $module->title }}</h3>
        <hr>
        <h5>Description :</h5>
        <p>{{ $module->description }}</p>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Module Code : {{ $module->module_code }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Module Leader : {{ $module->staff->first_name }} {{ $module->staff->last_name }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Credits : {{ $module->credit_score }}</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h5>Start Date : {{ $module->start_date }}</h5>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h5>End Date : {{ $module->end_date }}</h5>
            </div>
        </div>
        <hr>
        <div style="display: flex">
            <a href="/module/{{ $module->id }}/edit"><button class="btn btn-primary" style="width:100px">Edit</button>
            </a>
            <form action="/module/{{ $module->id }}" method="POST" style="margin-left: 10px;">
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" style="width:100px">Delete</button>
            </form>
        </div>
    </div>
@endsection
