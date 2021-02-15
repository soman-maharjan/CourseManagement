@extends('layouts.app')
@section('content')

<div class="container ">
  <!-- Calendar -->
  <div class="calendar shadow bg-white p-5" style="padding-bottom: 5px !important">
    <div class="d-flex align-items-center"><i class="fa fa-calendar fa-2x mr-3"></i>
      <h2 class="month font-weight-bold mb-0 text-uppercase">{{$time}}</h2>
    </div>
    <p class="font-italic text-muted mb-2">No events for this day.</p>
    <ol class="day-names list-unstyled">
      <li class="font-weight-bold text-uppercase">Sun</li>
      <li class="font-weight-bold text-uppercase">Mon</li>
      <li class="font-weight-bold text-uppercase">Tue</li>
      <li class="font-weight-bold text-uppercase">Wed</li>
      <li class="font-weight-bold text-uppercase">Thu</li>
      <li class="font-weight-bold text-uppercase">Fri</li>
      <li class="font-weight-bold text-uppercase">Sat</li>
    </ol>

    <ol class="days list-unstyled">
      <li>
        <div class="date">1</div>
        <div class="event bg-success">Software Engineering Exam</div>
      </li>
      <li>
        <div class="date">2</div>
      </li>
      <li>
        <div class="date">3</div>
      </li>
      <li>
        <div class="date">4</div>
      </li>
      <li>
        <div class="date">5</div>
      </li>
      <li>
        <div class="date">6</div>
      </li>
      <li>
        <div class="date">7</div>
      </li>
      <li>
        <div class="date">8</div>
      </li>
      <li>
        <div class="date">9</div>
      </li>
      <li>
        <div class="date">10</div>
      </li>
      <li>
        <div class="date">11</div>
      </li>
      <li>
        <div class="date">12</div>
      </li>
      <li>
        <div class="date">13</div>
        <div class="event all-day begin span-2 bg-warning">Event</div>
      </li>
      <li>
        <div class="date">14</div>
      </li>
      <li>
        <div class="date">15</div>
        <div class="event all-day end bg-success">Database Exam</div>
      </li>
      <li>
        <div class="date">16</div>
      </li>
      <li>
        <div class="date">17</div>
      </li>
      <li>
        <div class="date">18</div>
      </li>
      <li>
        <div class="date">19</div>
      </li>
      <li>
        <div class="date">20</div>
      </li>
      <li>
        <div class="date">21</div>
      </li>
      <li>
        <div class="date">22</div>
        <div class="event bg-info">Web Exam</div>
      </li>
      <li>
        <div class="date">23</div>
      </li>
      <li>
        <div class="date">24</div>
      </li>
      <li>
        <div class="date">25</div>
      </li>
      <li>
        <div class="date">26</div>
      </li>
      <li>
        <div class="date">27</div>
      </li>
      <li>
        <div class="date">28</div>
      </li>
      <li>
        <div class="date">29</div>
      </li>
      <li>
        <div class="date">30</div>
      </li>
      <li>
        <div class="date">31</div>
      </li>
      <li class="outside">
        <div class="date">1</div>
      </li>
      <li class="outside">
        <div class="date">2</div>
      </li>
      <li class="outside">
        <div class="date">3</div>
      </li>
      <li class="outside">
        <div class="date">4</div>
      </li>
    </ol>
  </div>
</div>

@endsection
