<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('is_archived', 0)->paginate(10);
        return view('student.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('title', 'id');
        return view('student.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create(request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'course_id' => 'required',
            'date_of_birth' => 'required',
            'student_id' => 'required',
            'date_joined' => 'required',
            'email' => 'required|unique:students',
            'gender' => 'required',
            'mobile_number' => 'required|unique:students',
            'address' => 'required'
        ]));

        User::create([
            'name' => request()->input('first_name'),
            'email' => request()->input('email'),
            'password' => Hash::make(request()->input('mobile_number')),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        User::where('email', request()->input('email'))->update(['role_id' => 2]);

        return redirect('/student')->with('success-alert', 'Student Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $courses = Course::pluck('title', 'id');
        return view('student.edit', [
            'student' => $student,
            'courses' => $courses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update(request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'course_id' => 'required',
            'student_id' => 'required',
            'date_of_birth' => 'required',
            'date_joined' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'mobile_number' => 'required',
            'address' => 'required'
        ]));

        return redirect('/student')->with('update-alert', 'Student Record Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        User::where('email', $student->email)->delete();
        $student->delete();
        return redirect('/student')->with('delete-alert', 'Student Record Removed!');
    }

    public function archive(Student $student)
    {
        $student->update([
            'is_archived' => 1
        ]);
        return redirect('/student')->with('archive-alert', 'Student Record Archieved!');
    }

    public function showArchivedData()
    {
        $students = Student::where('is_archived', 1)->paginate(10);
        return view('student.archive', [
            'students' => $students
        ]);
    }

    public function unarchive(Student $student)
    {
        $student->update([
            'is_archived' => 0
        ]);
        return redirect('/student/archive')->with('archive-alert', 'Student Record Restored!');
    }
}
