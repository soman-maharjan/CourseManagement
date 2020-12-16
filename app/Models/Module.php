<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function staff(){
        return $this->belongsTo(Staff::class,'module_leader');
    }

    public function course(){
        return $this->belongsToMany(Course::class, 'course_modules','module_id','course_id');
    }

    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }

    public function student_attendance(){
        return $this->belongsToMany(Attendance::class, 'attendances', 'module_id', 'student_id')->withPivot('status', 'attendance_date');
    }
}


