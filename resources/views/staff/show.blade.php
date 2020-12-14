@extends('layouts.app')
@section('content')
<h1>{{$staff->first_name}}</h1>
<h1>{{$staff->last_name}}</h1>

<h1>{{$staff->job_title}}</h1>

<h1>{{$staff->email}}</h1>
<a href="/staff/{{$staff->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
<form action="/staff/{{$staff->id}}" method="POST">
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger">Delete</button>
</form>
@endsection