@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">TimeTable</li>
        </ol>
    </nav>
    <ul class="nav justify-content-center nav-pills">
        <li class="nav-item">
            <a class="nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all"
                aria-selected="true">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab"
                aria-controls="nav-sunday" aria-selected="true">Sunday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-monday-tab" data-toggle="tab" href="#nav-monday" role="tab"
                aria-controls="nav-monday" aria-selected="true">Monday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab"
                aria-controls="nav-tuesday" aria-selected="true">Tuesday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab"
                aria-controls="nav-wednesday" aria-selected="true">Wednesday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab"
                aria-controls="nav-thursday" aria-selected="true">Thursday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-friday-tab" data-toggle="tab" href="#nav-friday" role="tab"
                aria-controls="nav-friday" aria-selected="true">Friday</a>
        </li>
    </ul>
    <br>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    <div class="card mb-3">
                        <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                            {{ $module->staff->first_name }}
                            {{ $module->staff->last_name }} </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                    </h6>
                                </div>
                                <div class="col-sm-4" style="text-align: center">
                                    <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="card-title" style="float: right">End Time:
                                        {{ $module->timetable[0]->end_time }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="tab-pane fade" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
            @php
                $val = true;
            @endphp
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    @if ($module->timetable[0]->day == 'Sunday')
                        {{ $val = false }}
                        <div class="card mb-3">
                            <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                                {{ $module->staff->first_name }}
                                {{ $module->staff->last_name }} </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                        </h6>
                                    </div>
                                    <div class="col-sm-4" style="text-align: center">
                                        <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title" style="float: right">End Time:
                                            {{ $module->timetable[0]->end_time }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            @if ($val)
                <div class="card mb-3">
                    <div class="card-header text-white bg-dark" style="text-align: center">No Classes on Sunday!
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
            @php
                $val = true;
            @endphp
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    @if ($module->timetable[0]->day == 'Monday')
                        {{ $val = false }}
                        <div class="card mb-3">
                            <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                                {{ $module->staff->first_name }}
                                {{ $module->staff->last_name }} </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                        </h6>
                                    </div>
                                    <div class="col-sm-4" style="text-align: center">
                                        <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title" style="float: right">End Time:
                                            {{ $module->timetable[0]->end_time }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            @if ($val)
                <div class="card mb-3">
                    <div class="card-header text-white bg-dark" style="text-align: center">No Classes on Monday!
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
            @php
                $val = true;
            @endphp
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    @if ($module->timetable[0]->day == 'Tuesday')
                        {{ $val = false }}
                        <div class="card mb-3">
                            <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                                {{ $module->staff->first_name }}
                                {{ $module->staff->last_name }} </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                        </h6>
                                    </div>
                                    <div class="col-sm-4" style="text-align: center">
                                        <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title" style="float: right">End Time:
                                            {{ $module->timetable[0]->end_time }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            @if ($val)
                <div class="card mb-3">
                    <div class="card-header text-white bg-dark" style="text-align: center">No Classes on Tuesday!
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
            @php
                $val = true;
            @endphp
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    @if ($module->timetable[0]->day == 'Wednesday')
                        {{ $val = false }}
                        <div class="card mb-3">
                            <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                                {{ $module->staff->first_name }}
                                {{ $module->staff->last_name }} </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                        </h6>
                                    </div>
                                    <div class="col-sm-4" style="text-align: center">
                                        <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title" style="float: right">End Time:
                                            {{ $module->timetable[0]->end_time }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            @if ($val)
                <div class="card mb-3">
                    <div class="card-header text-white bg-dark" style="text-align: center">No Classes on Wednesday!
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
            @php
                $val = true;
            @endphp
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    @if ($module->timetable[0]->day == 'Thursday')
                        {{ $val = false }}
                        <div class="card mb-3">
                            <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                                {{ $module->staff->first_name }}
                                {{ $module->staff->last_name }} </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                        </h6>
                                    </div>
                                    <div class="col-sm-4" style="text-align: center">
                                        <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title" style="float: right">End Time:
                                            {{ $module->timetable[0]->end_time }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            @if ($val)
                <div class="card mb-3">
                    <div class="card-header text-white bg-dark" style="text-align: center">No Classes on Thursday!
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
            @php
                $val = true;
            @endphp
            @foreach ($modules as $module)
                @if (count($module->timetable) != 0)
                    @if ($module->timetable[0]->day == 'Friday')
                        {{ $val = false }}
                        <div class="card mb-3">
                            <div class="card-header text-white bg-dark">{{ $module->title }} &#183; By
                                {{ $module->staff->first_name }}
                                {{ $module->staff->last_name }} </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="card-title">Start Time: {{ $module->timetable[0]->start_time }}
                                        </h6>
                                    </div>
                                    <div class="col-sm-4" style="text-align: center">
                                        <h6 class="card-title">Day: {{ $module->timetable[0]->day }}</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title" style="float: right">End Time:
                                            {{ $module->timetable[0]->end_time }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            @if ($val)
                <div class="card mb-3">
                    <div class="card-header text-white bg-dark" style="text-align: center">No Classes on Friday!
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
