<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Belajar Laravel',
            'image' => 'laravel.png',
            'content' => 'Belajar Laravel Dasar Bersama LagiKoding.com',
        ]);
        Post::create([
            'title' => 'Belajar Filament',
            'image' => 'filament.png',
            'content' => 'Belajar Filament Dasar Bersama LagiKoding.com',
        ]);
    }
}
