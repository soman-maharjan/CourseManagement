@extends('layouts.app')
@section('content')
    <div>
        <a href="/personal-tutor/create"><button class="btn btn-success create-button">Assign Student to available
                tutor</button></a>
    </div>
    <h3 style="text-align: center">PERSONAL TUTOR ASSIGNED STUDENTS</h3><br>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Student Id</th>
                <th scope="col">Student's Name</th>
                <th scope="col">Tutor's Name</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @if (count($students) > 0)
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->student_id }}</th>
                        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td>{{ $student->staff->first_name }} {{ $student->staff->last_name }}</td>
                        <td><a href="/personal-tutor/{{ $student->id }}/edit"><button class="btn action_button">
                                    <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                                </button>
                            </a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">No records found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
