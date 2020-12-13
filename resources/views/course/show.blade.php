@extends('layouts.app')
@section('content')
<h1>{{$course->title}}</h1>
<h1>{{$course->description}}</h1>

<h1>{{$course->cost}}</h1>

<h1>{{$course->semester}}</h1>
<a href="/course/{{$course->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
<form action="/course/{{$course->id}}" method="POST">
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger">Delete</button>
</form>
@endsection