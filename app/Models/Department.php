<?php

namespace App\Models;

use App\Models\Award;
use App\Models\Faculty;
use App\Models\Prog_db;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    public function faculty(){
        return $this->belongsTo(Faculty::class,'facultyid','facultyid');
    }

    public function prog(){
        return $this->hasMany(Prog_db::class,'deptid','deptid');
    }

    public function award(){
        return $this->hasMany(Award::class,'deptid','deptid');
    }

    public function user(){
        return $this->hasMany(User::class,'deptid','deptid');
    }
}
