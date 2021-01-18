@if($role_id[0] == 2)
<div id="mySidenav" class="sidenav">
  <h4 style="text-align: center; color:whitesmoke">DashBoard</h4>
  <a href="/student/profile/{{auth()->id()}}">Profile</a>
  <a href="/student/course/{{auth()->id()}}">Courses</a>
  <a href="/student/assignment/{{auth()->id()}}">Assignments</a>
  <a href="/student-tutor/{{auth()->id()}}">Personal Tutor</a>
  <a href="/assignment-submit/{{auth()->id()}}" style="line-height: 0.9">Submit Assignment</a>
  <a href="/calendar">Calendar</a>
</div>
@elseif($role_id[0] == 1)
<div id="mySidenav" class="sidenav">
  <h4 style="text-align: center; color:whitesmoke">Staff</h4>
  <a href="/student/profile/{{auth()->id()}}">Profile</a>
  <a href="/student/course/{{auth()->id()}}">Courses</a>
  <a href="/student/assignment/{{auth()->id()}}">Assignments</a>
  <a href="/student-tutor/{{auth()->id()}}">Personal Tutor</a>
  <a href="/assignment-submit/{{auth()->id()}}" style="line-height: 0.9">Submit Assignment</a>
  <a href="/calendar">Calendar</a>
</div>
@elseif($role_id[0] == null)
<div id="mySidenav" class="sidenav">
  <h4 style="text-align: center; color:whitesmoke">DashBoard</h4>
  <a href="/course">Courses</a>
  <a href="/student">Students</a>
  <a href="/staff">Staffs</a>
  <a href="/module">Modules</a>
  <a href="/assignment">Assignments</a>
  <a href="/attendance">Attendance</a>
  <a href="/personal-tutor">Personal Tutor</a>
  <a href="/calendar">Calendar</a>
</div>
@endif