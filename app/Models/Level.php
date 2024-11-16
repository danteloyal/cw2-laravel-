<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = ['name'];  // Fillable for level name

    // Define the relationship with Student
    public function students()
    {
        return $this->hasMany(Student::class);  // A level can have many students
    }
}
