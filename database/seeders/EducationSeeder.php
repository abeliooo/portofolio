<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educations')->insert([
            [
                'institution_name' => 'BINUS University',
                'degree' => 'Bachelor of Computer Science',
                'description' => "5th Semester with a focus on Database Technologies\nGPA: 3.52/4.00",
                'start_year' => 2023,
                'end_year' => 2027,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'institution_name' => 'SMAK Kasih Kemuliaan',
                'degree' => 'Mathematics and Science (MIPA)',
                'description' => "Graduated\nScore: 84.38",
                'start_year' => 2020,
                'end_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
