@extends('layouts.app')
@section('content')
<h1>{{$module->title}}</h1>
<h1>{{$module->description}}</h1>

<h1>{{$module->start_date}}</h1>

<h1>{{$module->end_date}}</h1>
<div>{{$module->staff->first_name}} {{$module->staff->last_name}}</div>
<a href="/module/{{$module->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
<form action="/module/{{$module->id}}" method="POST">
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger">Delete</button>
</form>
@endsection