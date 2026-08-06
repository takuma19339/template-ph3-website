<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $this->call([
            CategorySeeder::class,
            QuizSeeder::class,
            DummyQuizSeeder::class,
            Quiz::factory()
            ->count(100)
            ->has(Choice::factory()->count(4))
            ->create();
        ]);
    }
}
