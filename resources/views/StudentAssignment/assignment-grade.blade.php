@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Grades</a></li>
        </ol>
    </nav>
    @if (count($reports) > 0)
        @foreach ($reports as $report)
            @if ($report->grade != null)
                <div class="card">
                    <div class="card-header text-light bg-dark">
                        {{ $report->assignment->title }} &#183; <span
                            class="text-muted">{{ $report->module->title }}</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Grade : {{ $report->grade->grade }}</h5>
                        <p class="card-text">Feedback : {{ $report->grade->feedback }}</p>
                    </div>
                </div>
                <br>
            @endif
        @endforeach
    @else
        <br>
        <h4 style="text-align: center">Grades hasn't been posted!</h4>
    @endif
@endsection
