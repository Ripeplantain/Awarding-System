<?php

namespace App\Models;

use App\Models\College;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Special_Award extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'special_award';

    protected $casts = [
        'winner' => 'array',
        'cgpa' => 'array',
        'program' => 'array',
        'price' => 'array'
    ];

    public function college(){
        return $this->belongsTo(College::class, 'collegeid','collegeid');
    }
    
}
