<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Module;

class StudentCourseController extends Controller
{
    public function showCourse(User $user)
    {
        $student = Student::where('email', $user->email)->first();
        return view('studentCourse.student-course', [
            'user' => $user,
            'student' => $student,
        ]);
    }
    public function showCourseModule(Module $module)
    {
        return view('studentCourse.student-module', [
            'module' => $module
        ]);
    }
    public function showModuleAssignment(Module $module)
    {
        return view('studentCourse.module-assignment', [
            'module' => $module
        ]);
    }
}
