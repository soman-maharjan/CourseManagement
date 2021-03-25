@extends('layouts.app')
@section('content')
    @if (Session::has('success-alert'))
        <div class="alert alert-success fade-message" role="alert">
            {{ Session::get('success-alert') }}
        </div>
    @endif
    @if (Session::has('report-alert'))
        <div class="alert alert-danger fade-message" role="alert">
            {{ Session::get('report-alert') }}
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
            <li class="breadcrumb-item">Attendances</li>
        </ol>
    </nav>
    <div>
        <form class="form-inline my-2 my-lg-0" style="display:inline" action="/search-student-attendance" method="POST">
            @csrf
            <input class="form-control mr-sm-2" type="search" name="search"
                placeholder="e.g. Soman or maharjansoman@yahoo.com" aria-label="Search" style="width: 600px">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Student</button>
        </form>
        <a href="/attendance/archive"><button class="btn btn-dark create-button">View Archieved Records</button></a>
        <a href="/attendance/create"><button class="btn btn-success create-button">Create a new Record</button></a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Module</th>
                <th scope="col">Attendance Status</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
                <th scope="col">Report</th>
            </tr>
        </thead>
        <tbody>
            @if (count($attendances) > 0)
                @foreach ($attendances as $attendance)
                    <tr>
                        <th scope="row">{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}
                        </th>
                        <td>{{ $attendance->module->title }}</td>
                        <td>
                            @if ((int) $attendance->status)
                                <span class="alert alert-success attendance-status">Present</span>
                            @else
                                <span class="alert alert-danger attendance-status">Absent</span>
                            @endif
                        </td>
                        <td>{{ $attendance->attendance_date }}</td>
                        <td style="display: inline-flex">
                            <a href="/attendance/{{ $attendance->id }}/edit"><button class="btn action_button">
                                    <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                                </button>
                            </a>
                            <form action="/attendance/{{ $attendance->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn action_button action_button_margin"><i class="far fa-trash-alt fa-2x"
                                        style="color: red"></i></button>
                            </form>
                            <a href="/attendance/archive/{{ $attendance->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="/attendance/report" accept-charset="UTF-8">
                                @csrf
                                <input name="date" type="hidden" value="{{ $attendance->attendance_date }}">
                                <input name="student_id" type="hidden" value="{{ $attendance->student_id }}">
                                <input type="hidden" name="module_id" value="{{ $attendance->module->id }}">
                                <button class="btn btn-danger" style="padding:2px;width:60px">Report</button>
                            </form>
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
    <div class="d-flex justify-content-center">
        {{ $attendances->links() }}
    </div>
@endsection
