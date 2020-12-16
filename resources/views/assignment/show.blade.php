@extends('layouts.app')
@section('content')
<h1>{{$assignment->title}}</h1>
<h1>{{$assignment->description}}</h1>

<h1>{{$assignment->module->title}}</h1>

<a href="/assignment/{{$assignment->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
<form action="/assignment/{{$assignment->id}}" method="POST">
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger">Delete</button>
</form>
@endsection