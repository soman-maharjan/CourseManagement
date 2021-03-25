<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Module;
use App\Models\Staff;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('is_archived', 0)->paginate(10);
        return view('course.index', [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs = Staff::all();
        $modules = Module::all();
        return view('course.create', [
            'modules' => $modules,
            'staffs' => $staffs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'semester' => 'required',
            'description' => 'required',
            'credit_score' => 'required',
            'cost' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'course_leader' => 'nullable'
        ]);

        $course = new Course;
        $course->title = request()->input('title');
        $course->semester = request()->input('semester');
        $course->description = request()->input('description');
        $course->credit_score = request()->input('credit_score');
        $course->cost = request()->input('cost');
        $course->start_date = request()->input('start_date');
        $course->end_date = request()->input('end_date');
        $course->course_leader = request()->input('course_leader');

        $course->save();

        $module = Module::find(request()->input('module_id'));
        $course->module()->sync($module);

        return redirect('/course')->with('success-alert', 'Course Added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('course.show', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffs = Staff::all();
        $course = Course::find($id);
        $modules = Module::all();
        return view('course.edit', [
            'course' => $course,
            'modules' => $modules,
            'staffs' => $staffs

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course)
    {
        request()->validate([
            'title' => 'required',
            'semester' => 'required',
            'description' => 'required',
            'credit_score' => 'required',
            'cost' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'end_date' => 'nullable'

        ]);

        $course->title = request()->input('title');
        $course->semester = request()->input('semester');
        $course->description = request()->input('description');
        $course->credit_score = request()->input('credit_score');
        $course->cost = request()->input('cost');
        $course->start_date = request()->input('start_date');
        $course->end_date = request()->input('end_date');
        $course->course_leader = request()->input('course_leader');

        $course->save();

        $module = Module::find(request()->input('module_id'));
        $course->module()->sync($module);

        return redirect('/course')->with('update-alert', 'Course Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('/course')->with('delete-alert', 'Course Removed!');
    }

    public function archive(Course $course)
    {
        $course->update([
            'is_archived' => 1
        ]);
        return redirect('/course')->with('archive-alert', 'Course Record Archieved!');
    }

    public function showArchivedData()
    {
        $courses = Course::where('is_archived', 1)->paginate(10);
        return view('course.archive', [
            'courses' => $courses
        ]);
    }

    public function unarchive(Course $course)
    {
        $course->update([
            'is_archived' => 0
        ]);
        return redirect('/course/archive')->with('archive-alert', 'Course Record Restored!');
    }
}
