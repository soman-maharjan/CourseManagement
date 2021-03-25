<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function getStudentModules(){
        $student = Student::where('email',auth()->user()->email)->first();
        return $student->course->module;
    }
}
