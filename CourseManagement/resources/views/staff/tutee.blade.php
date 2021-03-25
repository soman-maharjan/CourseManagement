@extends('layouts.app')
@section('content')

    <h4 style="font-weight: bold">YOUR STUDENTS</h4> <br>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Student Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
            </tr>
        </thead>
        <tbody>
            @if (count($students) > 0)
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->student_id }}</th>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->mobile_number }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Student has not been assigned!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
