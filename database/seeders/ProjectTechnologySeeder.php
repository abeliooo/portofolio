<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = Technology::all()->keyBy('name');

        $projects = [
            'Sign Flow' => [
                ['name' => 'Flutter',  'type' => 'framework'],
                ['name' => 'Dart',     'type' => 'language'],
                ['name' => 'JavaScript', 'type' => 'language'],
                ['name' => 'Firebase', 'type' => 'database'],
            ],
            'DigiPurse' => [
                ['name' => 'ReactJS',    'type' => 'framework'],
                ['name' => 'JavaScript', 'type' => 'language'],
                ['name' => 'Motoko', 'type' => 'language'],
            ],
            'Garmedia' => [
                ['name' => 'Laravel', 'type' => 'framework'],
                ['name' => 'HTML',    'type' => 'framework'],
                ['name' => 'CSS',     'type' => 'framework'],
                ['name' => 'JavaScript', 'type' => 'language'],
                ['name' => 'PHP',     'type' => 'language'],
                ['name' => 'MySQL',   'type' => 'database'],
            ],
            'The Rajin Titip' => [
                ['name' => 'React', 'type' => 'framework'],
                ['name' => 'JavaScript', 'type' => 'language'],
                ['name' => 'Express.js', 'type' => 'language'],
                ['name' => 'Node.js', 'type' => 'language'],
                ['name' => 'Python', 'type' => 'language'],
                ['name' => 'Mongodb', 'type' => 'database'],
            ],
        ];

        foreach ($projects as $title => $techs) {
            $project = Project::where('title', $title)->first();

            if (!$project) {
                continue; 
            }

            $attachData = [];
            foreach ($techs as $tech) {
                if (isset($technologies[$tech['name']])) {
                    $attachData[$technologies[$tech['name']]->id] = ['type' => $tech['type']];
                }
            }

            $project->technologies()->attach($attachData);
        }
    }
}
