<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Module;

class StudentCourseController extends Controller
{
    public function showCourse(User $user){
        $student = Student::where('email',$user->email)->first();
        return view('student-course',[
        'user' => $user,
        'student' => $student,
        ]);
    }
    public function showModule(Module $module){
        return view('student-module',[
            'module' => $module
        ]);
    }
}
