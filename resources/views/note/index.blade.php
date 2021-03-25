@extends('layouts.app')
@section('content')
    @if (Session::has('alert'))
        <div class="alert alert-success fade-message" role="alert">
            {{ Session::get('alert') }}
        </div>
    @endif
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Diary</li>
        </ol>
    </nav>
    <div>
        <a href="/note/create"><button class="btn btn-success create-button">Create a new Note</button></a>
    </div>
    <br>
    <br>
    <hr>
    <div>
        <h3>Your Notes</h3>
        <div class="row">
            @foreach ($notes as $note)
                <div class="col-md-3" style="margin-bottom:20px">
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                        <div class="card-body">
                            <a href="/note/{{ $note->id }}">
                                <h5 class="card-title note-title">{!! Str::limit($note->title, 20) !!}</h5>
                            </a>
                            <p class="card-text">{!! Str::limit($note->note, 110) !!}</p>
                            <div style="display: flex">
                                <a href="/note/{{ $note->id }}" class=""><button class="btn"></button></a>
                                <form action="/note/{{ $note->id }}" method="POST" class="note-delete-button card-link">
                                    <input type="hidden" name="_method" value="delete" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn action_button"><i class="far fa-trash-alt fa-2x"
                                            style="color: red"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
