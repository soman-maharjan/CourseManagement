<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function grade()
    {
        return $this->hasOne(AssignmentGrade::class);
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
