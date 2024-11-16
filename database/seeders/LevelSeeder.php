<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create(['name' => 'Senior One']);
        Level::create(['name' => 'Senior Two']);
        Level::create(['name' => 'Senior Three']);
        Level::create(['name' => 'Senior Four']);
        Level::create(['name' => 'Senior Five']);
        Level::create(['name' => 'Senior Six']);
    }
}
