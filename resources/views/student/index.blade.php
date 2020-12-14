@extends('layouts.app')
@section('content')
<a href="/student/create"><button class="btn btn-success">Create</button></a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Course</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Address</th>
            <th scope="col">Options</th>

        </tr>
    </thead>
    <tbody>
        @if(count($students)>0)
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{$student->first_name}}</th>
            <td>{{$student->last_name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->course->title}}</td>
            <td>{{$student->mobile_number}}</td>
            <td>{{$student->address}}</td>
            <td style="display: inline-flex"><a href="/student/{{$student->id}}/edit"><button
                        class="btn btn-primary">Edit</button> </a>
                <form action="/student/{{$student->id}}" method="POST">
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="/student/{{$student->id}}">Show</a>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td>No records found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection