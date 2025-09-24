<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'organization_name' => 'BINUS University',
                'event_name' => 'Freshmen Leader',
                'start_year' => '2024',
                'end_year' => '2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organization_name' => 'BINUS University',
                'event_name' => 'Freshmen Pertner',
                'start_year' => '2024',
                'end_year' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organization_name' => 'BINUS University',
                'event_name' => 'Freshmen Leader',
                'start_year' => '2025',
                'end_year' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organization_name' => 'DoraHacks',
                'event_name' => 'ICP - WCHL25 - National Round',
                'start_year' => '2025',
                'end_year' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
