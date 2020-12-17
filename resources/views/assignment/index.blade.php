@extends('layouts.app')
@section('content')
<div >
    <a href="/assignment/create"><button class="btn btn-success create-button">Create a new Record</button></a>
</div>

<table class="table table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Module Name</th>
            <th scope="col">File Name</th>
            <th scope="col">Submission Date</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        @if(count($assignments)>0)
        @foreach ($assignments as $assignment)
        <tr>
            <th scope="row">{{$assignment->title}}</th>
            <td>{{  \Illuminate\Support\Str::limit($assignment->description, 20) }}</td>
            <td>{{$assignment->module->title}}</td>
            <td>{{  \Illuminate\Support\Str::limit($assignment->assignment_file, 20) }}</td>
            <td>{{$assignment->submission_date}}</td>
            <td style="display: inline-flex">
                <a href="/assignment/{{$assignment->id}}/edit"><button class="btn btn-primary icon-button">
                        <img src="{{ asset('icons/edit.png') }}" class="edit-icon">
                    </button>
                </a>

                <form action="/assignment/{{$assignment->id}}" method="POST">
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger icon-button"><img src="{{ asset('icons/remove.png') }}"
                            class="edit-icon"></button>
                </form>

                <a href="/assignment/{{$assignment->id}}"><button class="btn btn-success icon-button">
                        <img src="{{ asset('icons/show.png') }}" class="edit-icon">
                    </button>

            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6" class="text-center">No records found</td>
        </tr>
        @endif
    </tbody>
</table>

@endsection