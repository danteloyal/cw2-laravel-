<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name' => 'John Smith',
            'specialization' => 'Mathematics',
        ]);

        Teacher::create([
            'name' => 'Jane Doe',
            'specialization' => 'English Literature',
        ]);

        Teacher::create([
            'name' => 'Michael Brown',
            'specialization' => 'Physics',
        ]);

        Teacher::create([
            'name' => 'Emily White',
            'specialization' => 'Biology',
        ]);

        Teacher::create([
            'name' => 'Robert Johnson',
            'specialization' => 'Chemistry',
        ]);
    }
}
