<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentGrade extends Model
{
    use HasFactory;

    protected $table = 'assignment_grade';

    public function report()
    {
        return $this->hasOne(Report::class);
    }
}
