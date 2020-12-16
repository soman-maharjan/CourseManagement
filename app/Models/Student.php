<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
    public function module_attendance(){
        return $this->belongsToMany(Attendance::class, 'attendances', 'student_id', 'module_id')->withPivot('status', 'attendance_date');
    }
}
