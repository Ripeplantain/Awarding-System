<?php

namespace App\Models;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\Student_db;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prog_db extends Model
{
    use HasFactory;

    protected $table = 'prog_db';

    public function faculty(){
        return $this->belongsTo(Faculty::class, 'facultyid','facultyid');
    }

    public function department(){
        return $this->belongTo(Department::class, 'deptid','deptid');
    }

    public function student(){
        return $this->hasMany(Student_db::class, 'progid','progid');
    }
}
