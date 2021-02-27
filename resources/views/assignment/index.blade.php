@extends('layouts.app')
@section('content')
    @if (Session::has('success-alert'))
        <div class="alert alert-success fade-message" role="alert">
            {{ Session::get('success-alert') }}
        </div>
    @endif
    @if (Session::has('delete-alert'))
        <div class="alert alert-danger fade-message" role="alert">
            {{ Session::get('delete-alert') }}
        </div>
    @endif
    @if (Session::has('update-alert'))
        <div class="alert alert-primary fade-message" role="alert">
            {{ Session::get('update-alert') }}
        </div>
    @endif
    @if (Session::has('archive-alert'))
        <div class="alert alert-dark fade-message" role="alert">
            {{ Session::get('archive-alert') }}
        </div>
    @endif
    <div>
        <a href="/assignment/archive"><button class="btn btn-dark create-button">View Archieved Records</button></a>
    </div>
    <div>
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
            @if (count($assignments) > 0)
                @foreach ($assignments as $assignment)
                    <tr>
                        <th scope="row">{{ $assignment->title }}</th>
                        <td>{{ \Illuminate\Support\Str::limit($assignment->description, 20) }}</td>
                        <td>{{ $assignment->module->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($assignment->assignment_file, 20) }}</td>
                        <td>{{ $assignment->submission_date }}</td>
                        <td style="display: inline-flex">
                            <a href="/assignment/{{ $assignment->id }}/edit"><button class="btn action_button">
                                    <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                                </button>
                            </a>

                            <form action="/assignment/{{ $assignment->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn action_button action_button_margin"><i class="far fa-trash-alt fa-2x"
                                        style="color: red"></i></button>
                            </form>

                            <a href="/assignment/{{ $assignment->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-2x fa-eye" style="color: limegreen"></i>
                                </button>
                            </a>
                            <a href="/assignment/archive/{{ $assignment->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                </button>
                            </a>
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
