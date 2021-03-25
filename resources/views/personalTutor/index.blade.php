@extends('layouts.app')
@section('content')
    @if (Session::has('alert'))
        <div class="alert alert-success fade-message" role="alert">
            {{ Session::get('alert') }}
        </div>
    @endif
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Personal Tutor</li>
        </ol>
    </nav>
    <div>
        <a href="/personal-tutor/students"><button class="btn btn-dark create-button">View Pat Assigned
                Students</button></a>
    </div>
    <div>
        <a href="/personal-tutor/create"><button class="btn btn-success create-button">Assign Student to available
                tutor</button></a>
    </div>
    <h3 style="text-align: center">AVAILABLE TUTORS</h3><br>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tutor Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
            </tr>
        </thead>
        <tbody>
            @if (count($staffs) > 0)
                @foreach ($staffs as $staff)
                    <tr>
                        <th scope="row">{{ $staff->id }}</th>
                        <td>{{ $staff->first_name }}</td>
                        <td>{{ $staff->last_name }}</td>
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
