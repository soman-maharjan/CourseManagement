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
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">TimeTable</li>
        </ol>
    </nav>
    <div>
        <a href="/timetable/archive"><button class="btn btn-dark create-button">View Archieved Records</button></a>
    </div>
    <div>
        <a href="/timetable/create"><button class="btn btn-success create-button">Create a new Record</button></a>
    </div>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Module</th>
                <th scope="col">Day</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @if (count($timetables) > 0)
                @foreach ($timetables as $timetable)
                    <tr>
                        <th scope="row">{{ $timetable->module->title }}</th>
                        <td>{{ $timetable->day }}</td>
                        <td>{{ $timetable->start_time }}</td>
                        <td>{{ $timetable->end_time }}</td>
                        <td style="display: inline-flex">
                            <a href="/timetable/{{ $timetable->id }}/edit"><button class="btn action_button">
                                    <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                                </button>
                            </a>

                            <form action="/timetable/{{ $timetable->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn action_button action_button_margin"><i class="far fa-trash-alt fa-2x"
                                        style="color: red"></i></button>
                            </form>

                            <a href="/timetable/{{ $timetable->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-2x fa-eye" style="color: limegreen"></i>
                                </button>
                            </a>
                            <a href="/timetable/archive/{{ $timetable->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No records found</td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $timetables->links() }}
    </div>

@endsection
