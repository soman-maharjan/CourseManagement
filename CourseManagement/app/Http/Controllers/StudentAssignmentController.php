<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\report;

class StudentAssignmentController extends Controller
{
    public function showAssignment(User $user)
    {
        $student = Student::where('email', $user->email)->first();
        return view('StudentAssignment.index', [
            'user' => $user,
            'student' => $student,
        ]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'student_assignment' => 'required',
            'module_id' => 'required',
            'student_id' => 'required',
            'title' => 'required',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('student_assignment')) {
            $filenameWithExt = $request->file('student_assignment')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('student_assignment')->getClientOriginalExtension();

            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('student_assignment')->storeAs('public/student_assignment', $filenameToStore);
        } else {
            $filenameToStore = "nofile";
        }

        $assignment = new report;
        $assignment->student_assignment = $filenameToStore;
        $assignment->module_id = request()->input('module_id');
        $assignment->student_id = request()->input('student_id');
        $assignment->title = request()->input('title');
        $assignment->description = request()->input('description');
        $assignment->assignment_id = $request->assignment_id;

        $assignment->save();

        return redirect('/assignment-submit/' . auth()->id())->with('alert', 'Assignment Submitted!');
    }
}
