<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // son clases que nos permiten crear registros con datos fictisios en una tabla
    public function run(): void
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Post::factory(100)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'yey',
            'email' => 'test@example.com',
            'password' => bcrypt('04147006781'),

        ]);
    }
}
