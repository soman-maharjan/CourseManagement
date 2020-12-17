@extends('layouts.app')
@section('content')
<div >
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
    @if(count($courses)>0)
    @foreach ($courses as $course)
    <tr>
      <th scope="row">{{$course->title}}</th>
      <td>{{$course->semester}}</td>
      <td>{{  \Illuminate\Support\Str::limit($course->description, 20) }}</td>
      <td>{{$course->credit_score}}</td>
      <td>{{$course->cost}}</td>
      <td>{{$course->start_date}}</td>
      <td>{{$course->end_date}}</td>
      <td style="display: inline-flex">
        <a href="/course/{{$course->id}}/edit"><button class="btn btn-primary icon-button">
            <img src="{{ asset('icons/edit.png') }}" class="edit-icon">
          </button>
        </a>

        <form action="/course/{{$course->id}}" method="POST">
          <input type="hidden" name="_method" value="delete" />
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button class="btn btn-danger icon-button"><img src="{{ asset('icons/remove.png') }}" class="edit-icon"></button>
        </form>

        <a href="/course/{{$course->id}}"><button class="btn btn-success icon-button">
          <img src="{{ asset('icons/show.png') }}" class="edit-icon">
        </button>
      
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

@endsection