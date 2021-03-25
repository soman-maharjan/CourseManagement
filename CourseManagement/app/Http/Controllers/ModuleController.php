<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Course;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::where('is_archived', 0)->paginate(10);
        return view('module.index', [
            'modules' => $modules
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
        $courses = Course::all();
        return view('module.create', [
            'staffs' => $staffs,
            'courses' => $courses
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
            'description' => 'required',
            'start_date' => 'required',
            'module_code' => 'required',
            'end_date' => 'required',
            'credit_score' => 'required',
            'module_leader' => 'nullable'
        ]);

        $module = new Module;
        $module->title = request()->input('title');
        $module->description = request()->input('description');
        $module->start_date = request()->input('start_date');
        $module->end_date = request()->input('end_date');
        $module->module_code = request()->input('module_code');
        $module->credit_score = request()->input('credit_score');
        $module->module_leader = request()->input('module_leader');

        $module->save();

        $course = Course::find(request()->input('course_id'));
        $module->course()->sync($course);

        return redirect('/module')->with('success-alert', 'Module Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('module.show', [
            'module' => $module
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $staffs = Staff::all();
        $courses = Course::all();
        return view('module.edit', [
            'module' => $module,
            'staffs' => $staffs,
            'courses' => $courses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'module_code' => 'required',
            'credit_score' => 'required',
            'module_leader' => 'nullable'
        ]);

        $module->title = request()->input('title');
        $module->description = request()->input('description');
        $module->start_date = request()->input('start_date');
        $module->end_date = request()->input('end_date');
        $module->module_code = request()->input('module_code');
        $module->credit_score = request()->input('credit_score');
        $module->module_leader = request()->input('module_leader');

        $module->save();

        $course = Course::find(request()->input('course_id'));
        $module->course()->sync($course);

        return redirect('/module')->with('update-alert', 'Module Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect('/module')->with('delete-alert', 'Module Removed!');
    }

    public function archive(Module $module)
    {
        $module->update([
            'is_archived' => 1
        ]);
        return redirect('/module')->with('archive-alert', 'Module Record Archieved!');
    }

    public function showArchivedData()
    {
        $modules = Module::where('is_archived', 1)->paginate(10);
        return view('module.archive', [
            'modules' => $modules
        ]);
    }

    public function unarchive(Module $module)
    {
        $module->update([
            'is_archived' => 0
        ]);
        return redirect('/module/archive')->with('archive-alert', 'Module Record Restored!');
    }
}
