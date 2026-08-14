<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Choice;

class DummyQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Quiz::factory()
            ->count(100)
            ->has(Choice::factory()->count(4))
            ->create();
        
    }
}
