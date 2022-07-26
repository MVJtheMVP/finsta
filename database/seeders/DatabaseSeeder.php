<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         //\App\Models\User::factory(10)->create();

        \App\Models\User::factory()->has(Post::factory())->create([
            'name' => 'marcusv663',
            'email' => 'test1@example.com',
            'image' => 'cover_1.png',
        ]);

        \App\Models\User::factory()->has(Post::factory())->create([
            'name' => 'MVJtheMVP',
            'email' => 'test2@example.com',
            'image' => 'cover_2.png',
        ]);
        \App\Models\User::factory()->has(Post::factory())->create([
            'name' => 'randomuser',
            'email' => 'test3@example.com',
            'image' => 'cover_3.png',
        ]);
        \App\Models\User::factory()->has(Post::factory())->create([
            'name' => 'ducky218',
            'email' => 'test4@example.com',
            'image' => 'cover_4.png',
        ]);
        \App\Models\User::factory()->has(Post::factory())->create([
            'name' => 'hembryzilla',
            'email' => 'test5@example.com',
            'image' => 'cover_5.png',
        ]);
        \App\Models\User::factory()->has(Post::factory())->create([
            'name' => 'sammy21',
            'email' => 'test6@example.com',
            'image' => 'cover_6.png',
        ]);

    }
}
