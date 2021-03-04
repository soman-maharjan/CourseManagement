<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $staffCount = count(Staff::all());
        $courseCount = count(Course::all());
        $studentCount = count(Student::all());
        $userCount = count(User::all());
        if (Auth::user()->role_id == 2) {
            $student = Student::where('email',auth()->user()->email)->first();
            return view('profile.student-profile',[
                'student' => $student
            ]);
        } else {
            return view('home', [
                'staffCount' => $staffCount,
                'courseCount' => $courseCount,
                'studentCount' => $studentCount,
                'userCount' => $userCount
            ]);
        }
        
    }
}
