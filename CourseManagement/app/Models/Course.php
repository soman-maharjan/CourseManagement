<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function module()
    {
        return $this->belongsToMany(Module::class, 'course_modules', 'course_id', 'module_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
