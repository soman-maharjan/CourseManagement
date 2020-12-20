@extends('layouts.app')
@section('content')
<div >
  <a href="/staff/create"><button class="btn btn-success create-button">Create a new Record</button></a>
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
        @if(count($staffs)>0)
        @foreach ($staffs as $staff)
        <tr>         
        <th scope="row">{{$staff->first_name}}</th>
        <td>{{$staff->last_name}}</td>
        <td>{{$staff->email}}</td>
        <td>{{$staff->job_title}}</td>
        <td>{{$staff->number}}</td>
        <td>{{$staff->address}}</td>
        <td style="display: inline-flex">
          <a href="/staff/{{$staff->id}}/edit"><button class="btn btn-primary icon-button">
            <img src="{{ asset('icons/edit.png') }}" class="edit-icon">
          </button>
        </a>

        <form action="/staff/{{$staff->id}}" method="POST">
          <input type="hidden" name="_method" value="delete" />
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button class="btn btn-danger icon-button"><img src="{{ asset('icons/remove.png') }}" class="edit-icon"></button>
        </form>

        <a href="/staff/{{$staff->id}}"><button class="btn btn-success icon-button">
          <img src="{{ asset('icons/show.png') }}" class="edit-icon">
        </button>
        </td>
      </tr>
      @endforeach
      @else
        <tr>
            <td align="center" colspan="7" >No records found</td>
        </tr>
      @endif
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {{$staffs->links()}}
  </div>
@endsection