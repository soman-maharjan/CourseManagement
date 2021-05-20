<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Student;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['register' => false,'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

//Archive Student Record
Route::get('/student/archive', [App\Http\Controllers\StudentController::class,'showArchivedData']);
Route::get('/student/archive/{student}', [App\Http\Controllers\StudentController::class,'archive']);
Route::get('/student/unarchive/{student}', [App\Http\Controllers\StudentController::class,'unarchive']);

//Archive Course Record
Route::get('/course/archive', [App\Http\Controllers\CourseController::class,'showArchivedData']);
Route::get('/course/archive/{course}', [App\Http\Controllers\CourseController::class,'archive']);
Route::get('/course/unarchive/{course}', [App\Http\Controllers\CourseController::class,'unarchive']);

//Archive Staff Record
Route::get('/staff/archive', [App\Http\Controllers\StaffController::class,'showArchivedData']);
Route::get('/staff/archive/{staff}', [App\Http\Controllers\StaffController::class,'archive']);
Route::get('/staff/unarchive/{staff}', [App\Http\Controllers\StaffController::class,'unarchive']);

//Archive Module Record
Route::get('/module/archive', [App\Http\Controllers\ModuleController::class,'showArchivedData']);
Route::get('/module/archive/{module}', [App\Http\Controllers\ModuleController::class,'archive']);
Route::get('/module/unarchive/{module}', [App\Http\Controllers\ModuleController::class,'unarchive']);

//Archive Module Record
Route::get('/assignment/archive', [App\Http\Controllers\AssignmentController::class,'showArchivedData']);
Route::get('/assignment/archive/{assignment}', [App\Http\Controllers\AssignmentController::class,'archive']);
Route::get('/assignment/unarchive/{assignment}', [App\Http\Controllers\AssignmentController::class,'unarchive']);

//Archive Module Record
Route::get('/attendance/archive', [App\Http\Controllers\AttendanceController::class,'showArchivedData']);
Route::get('/attendance/archive/{attendance}', [App\Http\Controllers\AttendanceController::class,'archive']);
Route::get('/attendance/unarchive/{attendance}', [App\Http\Controllers\AttendanceController::class,'unarchive']);

//Archive Timetable Record
Route::get('/timetable/archive', [App\Http\Controllers\TimetableController::class,'showArchivedData']);
Route::get('/timetable/archive/{timetable}', [App\Http\Controllers\TimetableController::class,'archive']);
Route::get('/timetable/unarchive/{timetable}', [App\Http\Controllers\TimetableController::class,'unarchive']);

//Resource Controllers

Route::resource('/course',App\Http\Controllers\CourseController::class);

Route::resource('/student',App\Http\Controllers\StudentController::class);

Route::resource('/staff',App\Http\Controllers\StaffController::class);

Route::resource('/module',App\Http\Controllers\ModuleController::class);

Route::resource('/assignment',App\Http\Controllers\AssignmentController::class);

Route::resource('/attendance',App\Http\Controllers\AttendanceController::class);

Route::post('/attendance/report', [App\Http\Controllers\AttendanceController::class, 'report'])->name('report');

Route::get('/personal-tutor', [App\Http\Controllers\PersonalTutorController::class, 'index']);

Route::get('/personal-tutor/create', [App\Http\Controllers\PersonalTutorController::class, 'create']);

Route::post('/personal-tutor', [App\Http\Controllers\PersonalTutorController::class, 'assign']);

Route::get('/student/profile/{user}',[App\Http\Controllers\ProfileController::class,'showStudentProfile']);

Route::get('/staff/profile/{user}',[App\Http\Controllers\ProfileController::class,'showStaffProfile']);

Route::get('/student/course/{user}',[App\Http\Controllers\StudentCourseController::class,'showCourse']);

Route::get('/student-module/{module}',[App\Http\Controllers\StudentCourseController::class,'showCourseModule']);

Route::get('/student-module-assignment/{module}',[App\Http\Controllers\StudentCourseController::class,'showModuleAssignment']);

Route::get('/student/assignment/{user}',[App\Http\Controllers\StudentAssignmentController::class,'showAssignment']);

Route::get('/student-tutor/{user}',function(User $user){
    $student = Student::where('email',$user->email)->first();
    return view('personalTutor.student-tutor',[
        'student' => $student
    ]);
});

// Submit assignment 
Route::get('/assignment-submit/{user}',[App\Http\Controllers\ReportController::class,'index']);

Route::post('/assignment-submit',[App\Http\Controllers\StudentAssignmentController::class,'store']);

//grading assignments for staff
Route::get('/grade',[App\Http\Controllers\ReportController::class,'grade']);
Route::post('/grade',[App\Http\Controllers\ReportController::class,'store']);
//display student grade
Route::get('/student-grade/{user}',[App\Http\Controllers\ReportController::class,'studentGrade']);


Route::get('/tutee',[App\Http\Controllers\StaffController::class,'tutee']);

Route::resource('/note',\App\Http\Controllers\NoteController::class);

Route::post('/search-student-attendance', [App\Http\Controllers\AttendanceController::class,'search']);

Route::get('/personal-tutor/students', [App\Http\Controllers\PersonalTutorController::class,'showStudents']);
Route::get('/personal-tutor/{student}/edit', [App\Http\Controllers\PersonalTutorController::class,'edit']);


Route::get('/report',[App\Http\Controllers\ReportController::class,'reportIndex']);
Route::post('/report',[App\Http\Controllers\ReportController::class,'reportGenerate']);

Route::resource('/timetable' , \App\Http\Controllers\TimetableController::class);

Route::get('/class',[\App\Http\Controllers\TimetableController::class,'class']);

Route::get('/student-attendance',[\App\Http\Controllers\AttendanceController::class,'studentAttendance']);
});