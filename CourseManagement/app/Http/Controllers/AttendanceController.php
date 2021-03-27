<?php

namespace App\Http\Controllers;

use App\Mail\ReportStudent;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Module;
use App\Models\AttendanceReport;
use App\Models\Course;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Mail;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::where('is_archived', 0)->paginate(10);
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
        return redirect('/attendance')->with('success-alert', "Student's Attendance Added!");
    }

    public function edit(Attendance $attendance)
    {
        return view('attendance.edit', [
            'attendance' => $attendance
        ]);
    }

    public function update(Request $request, Attendance $attendance)
    {
        $attendance->update(request()->validate([
            'module_id' => 'required',
            'student_id' => 'required',
            'status' => 'required',
            'attendance_date' => 'required',
        ]));
        return redirect('attendance')->with('update-alert', 'Record Updated!');
    }

    public function report(Request $request)
    {
        AttendanceReport::create(request()->validate([
            'student_id' => 'required',
            'module_id' => 'required'
        ]));
        $student = Student::where('id', $request->student_id)->first();
        $module = Module::where('id', $request->module_id)->first();

        try {
            Mail::to($student->email)->send(new ReportStudent($student, $module, $request->date));
        } catch (Exception $e) {
            return redirect('/attendance')->with('report-alert', 'Problem with sending mail. Please try again later!');
        }

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
    public function archive(Attendance $attendance)
    {
        $attendance->update([
            'is_archived' => 1
        ]);
        return redirect('/attendance')->with('archive-alert', 'Attendance Archieved!');
    }

    public function showArchivedData()
    {
        $attendances = Attendance::where('is_archived', 1)->paginate(10);
        return view('attendance.archive', [
            'attendances' => $attendances
        ]);
    }

    public function unarchive(Attendance $attendance)
    {
        $attendance->update([
            'is_archived' => 0
        ]);
        return redirect('/attendance/archive')->with('archive-alert', 'Attendance Restored!');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect('attendance')->with('report-alert', 'Attendance Deleted!');
    }

    public function studentAttendance()
    {
        $student = Student::where('email', auth()->user()->email)->first();
        $course = Course::where('id', $student->course_id)->first();
        return view('attendance.student',[
            'student' => $student,
            'modules' => $course->module
        ]);
    }
}
