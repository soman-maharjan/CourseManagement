@extends('layouts.app')
@section('content')
<h1>{{$student->first_name}}</h1>
<h1>{{$student->last_name}}</h1>

<h1>{{$student->date_of_birth}}</h1>

<h1>{{$student->email}}</h1>
<a href="/student/{{$student->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
<form action="/student/{{$student->id}}" method="POST">
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger">Delete</button>
</form>
@endsection