<?php

namespace App\Http\Controllers;

use App\Models\AssignmentGrade;
use App\Models\Module;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class ReportController extends Controller
{
    public function index(User $user){
        $student = Student::where('email',$user->email)->first();
        return view('submit-assignment',[
            'student' => $student
        ]);
    }

    public function grade(){
        $staff = Staff::where('email',auth()->user()->email)->first();
        $modules = Module::where('module_leader', $staff->id)->get();
        return view('staff.grade-assignment',[
            'modules' => $modules
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'grade' => 'required',
            'feedback' => 'nullable'
        ]);
        $assignment_grade = new AssignmentGrade();
        $assignment_grade->grade = $request->grade;
        $assignment_grade->feedback = $request->feedback;
        $assignment_grade->module_id = $request->module_id;
        $assignment_grade->report_id = $request->report_id;
        $assignment_grade->save();

        return redirect('/grade')->with('alert','Assignment Marked!');
    }
}