<?php

namespace App\Models;

use App\Models\User;
use App\Models\Student_db;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Award extends Model
{
    use HasFactory;

    protected $table = 'award';

    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student_db::class, 'studid','studid');
    }

    public function user(){
        return $this->belongTo(User::class, 'user_id','user_id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'deptid','deptid');
    }
}
