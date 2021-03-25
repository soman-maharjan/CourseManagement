<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'pat_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function report()
    {
        return $this->hasMany(report::class, 'student_id');
    }
}
