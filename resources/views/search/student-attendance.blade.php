@extends('layouts.app')
@section('content')
@if($error == null)
<div>
    <form class="form-inline my-2 my-lg-0" style="display:inline" action="/search-student-attendance" method="POST">
        @csrf
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="e.g. Soman or maharjansoman@yahoo.com" aria-label="Search" style="width: 600px">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Student</button>
    </form>
</div>
<br>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Module</th>
                <th scope="col">Attendance Status</th>
                <th scope="col">Date</th>
                <th scope="col">Report</th>
            </tr>
        </thead>
        <tbody>
            @if (count($studentRecord) > 0)
                @foreach ($studentRecord as $record)
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
                        <td>
                            <form method="POST" action="/attendance/report" accept-charset="UTF-8">
                                @csrf
                                <input name="student_id" type="hidden" value="{{ $record->id }}">
                                <input type="hidden" name="module_id" value="{{ $record->module->id }}">
                                <button class="btn btn-danger" style="padding:2px;width:60px">Report</button>
                            </form>
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
@else
<div>
    <form class="form-inline my-2 my-lg-0" style="display:inline" action="/search-student-attendance" method="POST">
        @csrf
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="e.g. Soman or maharjansoman@yahoo.com" aria-label="Search" style="width: 600px">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Student</button>
    </form>
</div>
<br>
<br>
<h3 style="text-align: center">No Record Found</h3>
@endif
@endsection
