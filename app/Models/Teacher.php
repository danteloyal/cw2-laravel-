<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',           // Teacher's name
        'specialization'  // Teacher's specialization
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_teacher');
    }
}
