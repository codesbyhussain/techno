<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'description', 'faculty_coordinator', 'student_coordinator', 'poster', 'date',
    ];
}
