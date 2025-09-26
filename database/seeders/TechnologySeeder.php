<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::create([
            'name' => 'Github',
            'svg_icon' => 'svg_icon/c.svg'
        ]);

        Technology::create([
            'name' => 'C',
            'svg_icon' => 'svg_icon/c.svg'
        ]);

        Technology::create([
            'name' => 'R',
            'svg_icon' => 'svg_icon/r.svg'
        ]);

        Technology::create([
            'name' => 'Python',
            'svg_icon' => 'svg_icon/python.svg'
        ]);

        Technology::create([
            'name' => 'HTML',
            'svg_icon' => 'svg_icon/html.svg'
        ]);

        Technology::create([
            'name' => 'CSS',
            'svg_icon' => 'svg_icon/css.svg'
        ]);

        Technology::create([
            'name' => 'JavaScript',
            'svg_icon' => 'svg_icon/js.svg'
        ]);

        Technology::create([
            'name' => 'Laravel',
            'svg_icon' => 'svg_icon/laravel.svg'
        ]);

        Technology::create([
            'name' => 'PHP',
            'svg_icon' => 'svg_icon/php.svg'

        ]);

        Technology::create([
            'name' => 'MySQL',
            'svg_icon' => 'svg_icon/mysql.svg'
        ]);

        Technology::create([
            'name' => 'ReactJS',
            'svg_icon' => 'svg_icon/react.svg'

        ]);

        Technology::create([
            'name' => 'Flutter',
            'svg_icon' => 'svg_icon/flutter.svg'

        ]);

        Technology::create([
            'name' => 'Dart',
            'svg_icon' => 'svg_icon/dart.svg'

        ]);

        Technology::create([
            'name' => 'Firebase',
            'svg_icon' => 'svg_icon/firebase.svg'

        ]);

        Technology::create([
            'name' => 'Motoko',
            'svg_icon' => 'svg_icon/motoko.svg'
        ]);
    }
}
