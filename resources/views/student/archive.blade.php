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
    <h4>ARCHIVED STUDENT RECORDS (Click <i class="far fa-file-archive " style="color: black"></i> to unarchive.)</h4>
    <div>
        <a href="/student"><button class="btn btn-dark create-button">View UnArchieved Records</button></a>
    </div>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Course</th>
                <th scope="col">Student Id</th>
                {{-- <th scope="col">Address</th> --}}
                <th scope="col">Options</th>

            </tr>
        </thead>
        <tbody>
            @if (count($students) > 0)
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->first_name }}</th>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course->title }}</td>
                        <td>{{ $student->student_id }}</td>
                        {{-- <td>{{$student->address}}</td> --}}
                        <td style="display: inline-flex">
                            {{-- <a href="/student/{{$student->id}}/edit"><button class="btn action_button">
                    <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                    </button>
                </a> --}}

                            <form action="/student/{{ $student->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn action_button action_button_margin"><i class="far fa-trash-alt fa-2x"
                                        style="color: red"></i></button>
                            </form>

                            <a href="/student/{{ $student->id }}"><button class="btn action_button action_button_margin">
                                    <i class="far fa-2x fa-eye" style="color: limegreen"></i>
                                </button>
                            </a>
                            <a href="/student/unarchive/{{ $student->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                </button>
                            </a>
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
    <div class="d-flex justify-content-center">
        {{ $students->links() }}
    </div>
@endsection
