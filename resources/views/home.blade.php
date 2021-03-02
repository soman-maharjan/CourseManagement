@extends('layouts.app')
@section('content')
    <div id="main">
        <div class="row mb-3">
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-success text-white h-100">
                    <div class="card-body bg-success">
                        <div class="rotate">
                            <i class="fa fa-user fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Users</h6>
                        <h1 class="display-4">{{ $userCount }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card text-white bg-danger h-100">
                    <div class="card-body bg-danger">
                        <div class="rotate">
                            <i class="fa fa-list fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Staffs</h6>
                        <h1 class="display-4">{{ $staffCount }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card text-white bg-info h-100">
                    <div class="card-body bg-info">
                        <div class="rotate">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Students</h6>
                        <h1 class="display-4">{{ $studentCount }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card text-white bg-warning h-100">
                    <div class="card-body">
                        <div class="rotate">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Courses</h6>
                        <h1 class="display-4">{{ $courseCount }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
