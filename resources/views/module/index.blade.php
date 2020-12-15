@extends('layouts.app')
@section('content')
<a href="/module/create"><button class="btn btn-success">Create</button></a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Module Leader</th>
            <th scope="col">Credit Score</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Options</th>

        </tr>
    </thead>
    <tbody>
        @if(count($modules)>0)
        @foreach ($modules as $module)
        <tr>
            <th scope="row">{{$module->title}}</th>
            <td>{{$module->staff->first_name}} {{$module->staff->last_name}}</td>
            <td>{{$module->credit_score}}</td>
            <td>{{$module->start_date}}</td>
            <td>{{$module->end_date}}</td>
            <td style="display: inline-flex">
                <a href="/module/{{$module->id}}/edit"><button class="btn btn-primary icon-button">
                    <img src="{{ asset('icons/edit.png') }}" class="edit-icon">
                  </button>
                </a>
        
                <form action="/module/{{$module->id}}" method="POST">
                  <input type="hidden" name="_method" value="delete" />
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="btn btn-danger icon-button"><img src="{{ asset('icons/remove.png') }}" class="edit-icon"></button>
                </form>
        
                <a href="/module/{{$module->id}}"><button class="btn btn-success icon-button">
                  <img src="{{ asset('icons/show.png') }}" class="edit-icon">
                </button>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td>No records found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection