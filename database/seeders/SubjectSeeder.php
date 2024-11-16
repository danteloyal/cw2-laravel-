<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name' => 'Mathematics',
        ]);

        Subject::create([
            'name' => 'English',
        ]);

        Subject::create([
            'name' => 'Physics',
        ]);

        Subject::create([
            'name' => 'Chemistry',
        ]);

        Subject::create([
            'name' => 'Biology',
        ]);

        Subject::create([
            'name' => 'Geography',
        ]);

        Subject::create([
            'name' => 'History',
        ]);

        Subject::create([
            'name' => 'Civics',
        ]);

        Subject::create([
            'name' => 'Business Studies',
        ]);

        Subject::create([
            'name' => 'Agriculture',
        ]);

        Subject::create([
            'name' => 'Physical Education',
        ]);

        Subject::create([
            'name' => 'Islamic Studies',
        ]);

        Subject::create([
            'name' => 'Christian Religious Education',
        ]);

        Subject::create([
            'name' => 'ICT (Information & Communication Technology)',
        ]);

        Subject::create([
            'name' => 'Music',
        ]);

        Subject::create([
            'name' => 'Art',
        ]);

    }
}
