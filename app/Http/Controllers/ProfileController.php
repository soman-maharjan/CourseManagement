<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showStudentProfile(User $user){
        $student = Student::where('email',$user->email)->first();
        return view('student-profile',[
        'user' => $user,
        'student' => $student,
        ]);
    }
}
