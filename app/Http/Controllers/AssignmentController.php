<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\Module;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::where('is_archived',0)->paginate(10);
        return view('assignment.index',[
            'assignments' => $assignments
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
        return view('assignment.create',[
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
            'description' => 'required',
            'module_id' => 'required',
            'assignment_file' => 'nullable',
            'submission_date' => 'nullable'
            ]);

        if($request->hasFile('assignment_file')){
            $filenameWithExt = $request->file('assignment_file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('assignment_file')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('assignment_file')->storeAs('public/assignment_file',$filenameToStore);
        }else{
            $filenameToStore = "nofile";
        }

        $assignment = new Assignment;
        $assignment->title = request()->input('title');
        $assignment->description = request()->input('description');
        $assignment->module_id = request()->input('module_id');
        $assignment->assignment_file = $filenameToStore;
        $assignment->submission_date = request()->input('submission_date');

        $assignment->save();

        return redirect('/assignment')->with('success-alert','Assignment Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        return view('assignment.show',[
            'assignment' => $assignment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        $modules = Module::all();
        return view('assignment.edit',[
            'assignment' => $assignment,
            'modules' => $modules
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'module_id' => 'required',
            'assignment_file' => 'nullable',
            'submission_date' => 'nullable'
            ]);

        if($request->hasFile('assignment_file')){
            $filenameWithExt = $request->file('assignment_file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('assignment_file')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('assignment_file')->storeAs('public/assignment_file',$filenameToStore);
        }

        $assignment->title = request()->input('title');
        $assignment->description = request()->input('description');
        $assignment->module_id = request()->input('module_id');
        $assignment->submission_date = request()->input('submission_date');
        if($request->hasFile('assignment_file')){
            $assignment->assignment_file = $filenameToStore;
        }

        $assignment->save();

        return redirect('/assignment')->with('update-alert','Assignment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect('/assignment')->with('delete-alert','Assignment Removed!');
    }

    public function archive(Assignment $assignment){
        $assignment->update([
            'is_archived' => 1
        ]);
        return redirect('/assignment')->with('archive-alert','Assignment Archieved!');
    }

    public function showArchivedData()
    {
        $assignments = Assignment::where('is_archived',1)->paginate(10);
        return view('assignment.archive',[
            'assignments' => $assignments
        ]);
    }

    public function unarchive(Assignment $assignment){
        $assignment->update([
            'is_archived' => 0
        ]);
        return redirect('/assignment/archive')->with('archive-alert','Assignment Restored!');
    }
}
