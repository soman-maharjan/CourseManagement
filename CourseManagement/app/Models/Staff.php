<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function module()
    {
        return $this->hasMany(Module::class, 'module_leader');
    }
    public function student()
    {
        return $this->hasMany(Student::class, 'pat_id');
    }
    public function course()
    {
        return $this->hasMany(Course::class, 'module_leader');
    }
}
