@extends('layouts.app')
@section('content')
    @if (Session::has('alert'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('alert') }}
        </div>
    @endif
    <div>
        <a href="/note/{{ $note->id }}/edit"><button class="btn btn-primary create-button">Edit</button></a>
    </div>
    <br>
    <br>
    <hr>
    <div class="card">
        <h5 class="card-header">{{ $note->title }}</h5>
        <div class="card-body">
            <p class="card-text">{!! $note->note !!}</p>
        </div>
    </div>
@endsection
