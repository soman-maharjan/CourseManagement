@extends('layouts.app')
@section('content')
    @if ($error == null)
        <div>
            <form class="form-inline my-2 my-lg-0" style="display:inline" action="/search-student-attendance" method="POST">
                @csrf
                <input class="form-control mr-sm-2" type="search" name="search"
                    placeholder="e.g. Soman or maharjansoman@yahoo.com" aria-label="Search" style="width: 600px">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Student</button>
            </form>
            <a href="/attendance/create"><button class="btn btn-success create-button">Create a new Record</button></a>
            <a href="/attendance/archive"><button class="btn btn-dark create-button">View Archieved Records</button></a>
        </div>
        <br>
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
                @if (count($studentRecord) > 0)
                    @foreach ($studentRecord as $record)
                        @if ($record->is_archived == 0)
                            <tr>
                                <th scope="row">{{ $record->student->first_name }} {{ $record->student->last_name }}
                                </th>
                                <td>{{ $record->module->title }}</td>
                                <td>
                                    @if ((int) $record->status)
                                        <span class="alert alert-success attendance-status">Present</span>
                                    @else
                                        <span class="alert alert-danger attendance-status">Absent</span>
                                    @endif
                                </td>
                                <td>{{ $record->attendance_date }}</td>
                                <td style="display: inline-flex">
                                    <a href="/attendance/{{ $record->id }}/edit"><button class="btn action_button">
                                            <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                                        </button>
                                    </a>
                                    <a href="/attendance/archive/{{ $record->id }}"><button
                                            class="btn action_button action_button_margin">
                                            <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="/attendance/report" accept-charset="UTF-8">
                                        @csrf
                                        <input name="student_id" type="hidden" value="{{ $record->id }}">
                                        <input type="hidden" name="module_id" value="{{ $record->module->id }}">
                                        <button class="btn btn-danger" style="padding:2px;width:60px">Report</button>
                                    </form>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No records found</td>
                            </tr>
                        @endif
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">No records found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    @else
        <div>
            <form class="form-inline my-2 my-lg-0" style="display:inline" action="/search-student-attendance" method="POST">
                @csrf
                <input class="form-control mr-sm-2" type="search" name="search"
                    placeholder="e.g. Soman or maharjansoman@yahoo.com" aria-label="Search" style="width: 600px">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Student</button>
            </form>
        </div>
        <br>
        <br>
        <h3 style="text-align: center">No Record Found</h3>
    @endif
@endsection
