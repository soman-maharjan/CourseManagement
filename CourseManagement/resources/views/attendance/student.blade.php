@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Attendance</li>
        </ol>
    </nav>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Module</th>
                <th scope="col">Present (Days)</th>
                <th scope="col">Absent (Days)</th>
            </tr>
        </thead>
        <tbody>
            @if (count($modules) > 0)
                @foreach ($modules as $module)
                    @php
                        $countPresent = 0;
                        $countAbsent = 0
                    @endphp
                    <tr>
                        <td>{{ $module->title }}</td>
                        <td>
                            @foreach($student->attendance as $s)
                                @if($s->module_id == $module->id && $s->status == 1)
                                    @php
                                        $countPresent++;    
                                    @endphp
                                @endif
                            @endforeach
                            {{$countPresent}}
                        </td>
                        <td>
                            @foreach($student->attendance as $s)
                                @if($s->module_id == $module->id && $s->status == 0)
                                    @php
                                        $countAbsent++;    
                                    @endphp
                                @endif
                            @endforeach
                            {{$countAbsent}}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center">No records found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
