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
        <a href="/staff"><button class="btn btn-dark create-button">View UnArchieved Records</button></a>
    </div>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Job Position</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Address</th>
                <th scope="col">Options</th>

            </tr>
        </thead>
        <tbody>
            @if (count($staffs) > 0)
                @foreach ($staffs as $staff)
                    <tr>
                        <th scope="row">{{ $staff->first_name }}</th>
                        <td>{{ $staff->last_name }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->job_title }}</td>
                        <td>{{ $staff->number }}</td>
                        <td>{{ $staff->address }}</td>
                        <td style="display: inline-flex">

                            <form action="/staff/{{ $staff->id }}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn action_button action_button_margin"><i class="far fa-trash-alt fa-2x"
                                        style="color: red"></i></button>
                            </form>

                            <a href="/staff/{{ $staff->id }}"><button class="btn action_button action_button_margin">
                                    <i class="far fa-2x fa-eye" style="color: limegreen"></i>
                                </button>
                            </a>
                            <a href="/staff/unarchive/{{ $staff->id }}"><button
                                    class="btn action_button action_button_margin">
                                    <i class="far fa-file-archive fa-2x" style="color: black"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td align="center" colspan="7">No records found</td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $staffs->links() }}
    </div>
@endsection
