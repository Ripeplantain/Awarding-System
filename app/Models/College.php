<?php

namespace App\Models;

use App\Models\Faculty;
use App\Models\Special_Award;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class College extends Model
{
    use HasFactory;

    public function special(){
        return $this->hasMany(Special_Award::class,'collegeid','collegeid');
    }

    public function faculty(){
        return $this->hasMany(Faculty::class,'facultyid','facultyid');
    }
}
