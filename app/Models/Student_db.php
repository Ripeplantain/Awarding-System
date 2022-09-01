<?php

namespace App\Models;

use App\Models\Award;
use App\Models\Prog_db;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student_db extends Model
{
    use HasFactory;

    protected $table = 'students_db';
    protected $primaryKey = 'studid';

    public function award()
    {
        return $this->hasMany(Award::class, 'studid', 'studid');
    }

    public function program()
    {
        return $this->belongsTo(Prog_db::class, 'progid', 'progid');
    }
}
