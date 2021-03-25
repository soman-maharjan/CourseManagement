<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'module_leader');
    }

    public function course()
    {
        return $this->belongsToMany(Course::class, 'course_modules', 'module_id', 'course_id');
    }

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function timetable(){
        return $this->hasMany(Timetable::class);
    }
}
