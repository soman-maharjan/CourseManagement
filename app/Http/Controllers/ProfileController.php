<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Staff;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showStudentProfile(User $user)
    {
        $student = Student::where('email', $user->email)->first();
        return view('profile.student-profile', [
            'user' => $user,
            'student' => $student,
        ]);
    }
    public function showStaffProfile(User $user)
    {
        $staff = Staff::where('email', $user->email)->first();
        return view('profile.staff-profile', [
            'user' => $user,
            'staff' => $staff,
        ]);
    }
}
