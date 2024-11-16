<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeacherSeeder::class,
            LevelSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,

        ]);
    }
}
