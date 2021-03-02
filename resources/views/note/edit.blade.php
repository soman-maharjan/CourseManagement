@extends('layouts.app')
@section('content')
    <h2>Edit Your note</h2>
    <form method="POST" action="/note/{{ $note->id }}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $note->title }}">
                @error('title')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <h5>Note</h5>
                <textarea name="note" id="note" cols="70" rows="10" class="note">{{ $note->note }}</textarea>
                @error('note')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <input type="number" name="user_id" value="{{ auth()->user()->id }}" hidden>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
