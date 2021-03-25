<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Student;
use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::where('is_archived', 0)->paginate(10);
        return view('Timetable.index',[
            'timetables' => $timetables
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
        return view('Timetable.create',[
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
        Timetable::create($request->validate([
            'module_id' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => ' required'
        ]));
        return redirect('/timetable')->with('success-alert','Class Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $timetable)
    {
        return view('Timetable.show',[
            'timetable' => $timetable
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        return view('Timetable.edit',[
            'timetable' => $timetable
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
        $timetable->update($request->all());
        return redirect('/timetable')->with('update-alert',"Record Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();
        return redirect('/timetable')->with('delete-alert','Record Deleted!');
    }

    public function archive(Timetable $timetable)
    {
        $timetable->update([
            'is_archived' => 1
        ]);
        return redirect('/timetable')->with('archive-alert', 'Timetable Record Archieved!');
    }

    public function showArchivedData()
    {
        $timetables = Timetable::where('is_archived', 1)->paginate(10);
        return view('Timetable.archive', [
            'timetables' => $timetables
        ]);
    }

    public function unarchive(Timetable $timetable)
    {
        $timetable->update([
            'is_archived' => 0
        ]);
        return redirect('/timetable/archive')->with('archive-alert', 'Timetable Record Restored!');
    }

    public function class(){
        $t = new Timetable();
        $modules = $t->getStudentModules();
        return view('Timetable.student',[
            'modules' => $modules
        ]);
    }
}
