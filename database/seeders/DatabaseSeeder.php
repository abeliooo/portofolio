<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ProjectSeeder::class,
            EducationSeeder::class,
            TechnologySeeder::class,
            ExperienceSeeder::class,
            ProjectTechnologySeeder::class,
        ]);
    }
}
