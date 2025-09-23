<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Sign Flow',
                'short_description' => 'SignFlow is an Android sign language learning application that uses the Flutter framework with a backend using Firebase.',
                'long_description' => 'SignFlow is an intuitive mobile application developed using Flutter and Firebase, designed to help users learn Indonesian Sign Language (BISINDO) interactively. The app features structured lessons, engaging quizzes, and a visual dictionary to promote inclusivity and bridge communication gaps across different communities.',
                'image_url' => '/SignFlow.png',
                'project_url' => 'https://github.com/abeliooo/SignFlow',
                'source_code_url' => 'https://github.com/abeliooo/SignFlow',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DigiPurse',
                'short_description' => 'DigiPurse is an all-in-one decentralized application that brings your digital identity, event tickets, documents, and payments together in a single, secure Web3 wallet — giving you complete ownership and control over your digital life.',
                'long_description' => "DigiPurse is designed to simplify digital life management while ensuring user privacy and security through blockchain technology. Whether you are managing event tickets or storing personal documents, DigiPurse brings it all under one decentralized platform.\nDocumentation Notion : https://www.notion.so/Digipurse-Documentation-23bd79ae3c3280f29fa6f920eea6fd88\nDemo Video Youtube : https://youtu.be/KdTfNUShSew\nPitch Deck Canva : https://www.canva.com/design/DAGuMMkT9lU/csS4Q6U6rroCYq-V0zdX1g/edit?utm_content=DAGuMMkT9lU&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton",
                'image_url' => 'https://placehold.co/600x400/1f2937/d1d5db?text=E-Commerce',
                'project_url' => '#',
                'source_code_url' => 'https://github.com/Kazeth/DigiPurse',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Garmedia',
                'short_description' => 'Garmedia is a website to buy book you like, inspired by Gramedia.com (It is for my learning purpose) I am focusing on learning CRUD such as search book base on the title, or author or by the category.',
                'long_description' => 'A Kanban-style task management application that allows users to create projects, add tasks, and drag-and-drop them between different status columns (e.g., To Do, In Progress, Done). Built using Vue.js on the frontend and a Laravel API on the backend.',
                'image_url' => 'https://placehold.co/600x400/4a5568/FFFFFF?text=Task+App',
                'project_url' => 'https://github.com/abeliooo/Garmedia',
                'source_code_url' => 'https://github.com/abeliooo/Garmedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
