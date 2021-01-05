<?php

namespace App\Http\Controllers;

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
}
