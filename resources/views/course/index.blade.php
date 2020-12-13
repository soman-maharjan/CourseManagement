@extends('layouts.app')
@section('content')
        <a href="/course/create"><button class="btn btn-success">Create</button></a>
        <table class="table table-hover">
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
                @foreach ($courses as $course)
                <tr>         
                <th scope="row">{{$course->title}}</th>
                <td>{{$course->semester}}</td>
                <td>{{  \Illuminate\Support\Str::limit($course->description, 20) }}</td>
                <td>{{$course->credit_score}}</td>
                <td>{{$course->cost}}</td>
                <td>{{$course->start_date}}</td>
                <td>{{$course->end_date}}</td>
                <td style="display: inline-flex"><a href="/course/{{$course->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
                    <form action="/course/{{$course->id}}" method="POST">
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/course/{{$course->id}}">Show</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    
@endsection