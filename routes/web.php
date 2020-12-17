<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/course',App\Http\Controllers\CourseController::class)->middleware('auth');

Route::resource('/student',App\Http\Controllers\StudentController::class)->middleware('auth');

Route::resource('/staff',App\Http\Controllers\StaffController::class)->middleware('auth');

Route::resource('/module',App\Http\Controllers\ModuleController::class)->middleware('auth');

Route::resource('/assignment',App\Http\Controllers\AssignmentController::class)->middleware('auth');

Route::resource('/attendance',App\Http\Controllers\AttendanceController::class)->middleware('auth');

Route::post('/attendance/report', [App\Http\Controllers\AttendanceController::class, 'report'])->name('report');

Route::get('/personal-tutor', [App\Http\Controllers\PersonalTutorController::class, 'index']);

Route::get('/personal-tutor/create', [App\Http\Controllers\PersonalTutorController::class, 'create']);

Route::post('/personal-tutor', [App\Http\Controllers\PersonalTutorController::class, 'assign']);
