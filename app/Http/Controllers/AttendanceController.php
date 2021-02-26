<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Module;
use App\Models\AttendanceReport;


class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::paginate(10);
        return view('attendance.index', [
            'attendances' => $attendances
        ]);
    }

    public function create()
    {
        $students = Student::all();
        $modules = Module::all();

        return view('attendance.create', [
            'students' => $students,
            'modules' => $modules
        ]);
    }

    public function store(Request $request)
    {
        Attendance::create(request()->validate([
            'module_id' => 'required',
            'student_id' => 'required',
            'status' => 'required',
            'attendance_date' => 'required',
        ]));
        return redirect('/attendance')->with('success-alert', 'Student Reported!');
    }

    public function report(Request $request)
    {
        AttendanceReport::create(request()->validate([
            'student_id' => 'required',
            'module_id' => 'required'
        ]));
        return redirect('/attendance')->with('report-alert', 'Student Reported!');
    }

    public function search(Request $request)
    {
        $error = null;
        $studentRecord = null;
        $student = Student::where('first_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('last_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%')
            ->first();
        if ($student == null) {
            $error = "Student Not Found!";
        } else {
            $studentRecord = $student->attendance;
        }
        return view('search.student-attendance', [
            'studentRecord' => $studentRecord,
            'error' => $error
        ]);
    }
}
