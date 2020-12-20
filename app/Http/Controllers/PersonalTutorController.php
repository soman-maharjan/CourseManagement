<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Student;

class PersonalTutorController extends Controller
{
    public function assign(Request $request){
        $student_id = request()->input('student_id');
        $staff_id = request()->input('staff_id');
        Student::where('id',$student_id)->update(array('pat_id'=>$staff_id));
        return redirect('/personal-tutor')->with('alert','Personal Tutor Assigned Successfully!');

    }
    public function index(){
        $staffs = Staff::all();
        return view('personal-tutor.index',[
            'staffs' => $staffs
        ]);
    }
    public function create(){
        $staffs = Staff::all();
        $students = Student::all();
        return view('personal-tutor.create',[
            'staffs' => $staffs,
            'students' => $students
        ]);
    }
}