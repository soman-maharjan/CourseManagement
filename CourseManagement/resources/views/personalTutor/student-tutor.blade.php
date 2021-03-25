@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="main-body">

            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Personal Tutor</li>
                </ol>
            </nav>
            <div class="row gutters-sm">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-light bg-dark">
                            <b>Your Personal Tutor</b>
                        </div>
                    </div>
                    <div class="card mb-3">
                        @if ($student->staff == null)
                            <div class="card-body">
                                <br>
                                <h4 class="text-center">No tutor has been assigned!</h4><br><br>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Contact Student Service for more information</h5>
                                </div>
                            </div>
                        @else
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $student->staff->first_name }}
                                        {{ $student->staff->last_name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $student->staff->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $student->staff->number }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $student->staff->address }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date Joined</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $student->staff->date_joined }}
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card" style="margin-left: 10px">
                    <div class="card-header text-white bg-primary">
                        <h5>Contact Your Personal Tutor Through : {{ $student->staff->email }}</h5>
                    </div>
                </div>
                @endif
            @endsection
