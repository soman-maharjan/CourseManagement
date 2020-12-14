<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Module;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index',[
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
        $modules = Module::all();
        return view('course.create',[
            'modules' => $modules
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
            'end_date' => 'required'
            ]);

        $course = new Course;
        $course->title = request()->input('title');
        $course->semester = request()->input('semester');
        $course->description = request()->input('description');
        $course->credit_score = request()->input('credit_score');
        $course->cost = request()->input('cost');
        $course->start_date = request()->input('start_date');
        $course->end_date = request()->input('end_date');

        $course->save();
        
        $module = Module::find(request()->input('module_id'));
        $course->module()->sync($module);

        return redirect('/course');
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
        return view('course.show',[
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
        $course = Course::find($id);
        $modules = Module::all();
        return view('course.edit',[
            'course' => $course,
            'modules' => $modules
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
            'end_date' => 'required'
            ]);

        $course->title = request()->input('title');
        $course->semester = request()->input('semester');
        $course->description = request()->input('description');
        $course->credit_score = request()->input('credit_score');
        $course->cost = request()->input('cost');
        $course->start_date = request()->input('start_date');
        $course->end_date = request()->input('end_date');

        $course->save();
        
        $module = Module::find(request()->input('module_id'));
        $course->module()->sync($module);

        return redirect('/course');
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
        return redirect('/course');
    }
}
