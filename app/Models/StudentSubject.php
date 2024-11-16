<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;
    // Disable timestamps for this pivot model if not required
    public $timestamps = false;

    // Define the table if it's different from the default
    protected $table = 'student_subject';

    // Define the primary key if it differs from the default 'id'
    protected $primaryKey = null;

    // Define the foreign keys if they are different from the default 'student_id' and 'subject_id'
    protected $fillable = ['student_id', 'subject_id'];
}
