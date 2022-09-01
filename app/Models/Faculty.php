<?php

namespace App\Models;

use App\Models\College;
use App\Models\Prog_db;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculty';

    public function department(){
        return $this->hasMany(Department::class,'facultyid','facultyid');
    }

    public function college(){
        return $this->belongsTo(College::class,'collegeid','collegeid');
    }

    public function prog(){
        return $this->hasMany(Prog_db::class,'facultyid','facultyid');
    }
}
