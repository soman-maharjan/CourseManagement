@extends('layouts.app')
@section('content')
<div >
    <a href="/student/create"><button class="btn btn-success create-button">Create a new Record</button></a>
</div>
<table class="table table-hover table-striped">
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
            <td style="display: inline-flex">
                <a href="/student/{{$student->id}}/edit"><button class="btn btn-primary icon-button">
                    <img src="{{ asset('icons/edit.png') }}" class="edit-icon">
                  </button>
                </a>
        
                <form action="/student/{{$student->id}}" method="POST">
                  <input type="hidden" name="_method" value="delete" />
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="btn btn-danger icon-button"><img src="{{ asset('icons/remove.png') }}" class="edit-icon"></button>
                </form>
        
                <a href="/student/{{$student->id}}"><button class="btn btn-success icon-button">
                  <img src="{{ asset('icons/show.png') }}" class="edit-icon">
                </button>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="7" class="text-center">No records found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection