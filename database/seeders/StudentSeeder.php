<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Student::create([
            'full_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'gender' => 'Male',
            'level_id' => 1,  // Level 1 must exist in the levels table
            'age' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more sample records as needed
        Student::create([
            'full_name' => 'peter',
            'email' => 'john@example.com',
            'gender' => 'Male',
            'level_id' => 2,  // Level 1 must exist in the levels table
            'age' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
