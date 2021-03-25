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
            <li class="breadcrumb-item">Courses</li>
        </ol>
    </nav>
    <div>
        <a href="/course/archive"><button class="btn btn-dark create-button">View Archieved Records</button></a>
    </div>
    <div>
        <a href="/course/create"><button class="btn btn-success create-button">Create a new Record</button></a>
    </div>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Semester</th>
                <th scope="col">Description</th>
                <th scope="col">Credit Score</th>
                <th scope="col">Cost</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Options</th>


            </tr>
        </thead>
        <tbody>
            @if (count($courses) > 0)
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $course->title }}</th>
                        <td>{{ $course->semester }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($course->description, 20) }}</td>
                        <td>{{ $course->credit_score }}</td>
                        <td>{{ $course->cost }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->end_date }}</td>
                        <td style="display: inline-flex">
                            <a href="/course/{{ $course->id }}/edit"><button class="btn action_button">
                                    <i class="far fa-2x fa-edit" style="color: #2B60DE"></i>
                                </button>
                            </a>

                            <form action="/course/{{ $course->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn action_button action_button_margin"><i class="far fa-trash-alt fa-2x"
                                        style="color: red"></i></button>
                            </form>

                            <a href="/course/{{ $course->id }}"><button class="btn action_button action_button_margin">
                                    <i class="far fa-2x fa-eye" style="color: limegreen"></i>
                                </button>
                            </a>
                            <a href="/course/archive/{{ $course->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" class="text-center">No records found</td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $courses->links() }}
    </div>

@endsection
