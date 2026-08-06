<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'question' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？']);
            'category_id' => Category::where('name', 'IT')->first()->id;

        $quiz->choices()->createMany([
            ['choice' => '約79万人', 'is_correct' => false],
            ['choice' => '約30万人', 'is_correct' => false],
            ['choice' => '約60万人', 'is_correct' => true],
        ]);

        $quiz = Quiz::create([
            'question' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？'],
            'category_id' => Category::where('name', 'IT')->first()->id,
        ]);

        $quiz->choices()->createMany([
            ['choice' => 'デジタルビジネス', 'is_correct' => false],
            ['choice' => 'デジタルトランスフォーメーション', 'is_correct' => true],
            ['choice' => 'デジタルマーケティング', 'is_correct' => false],
        ]);

        $quiz = Quiz::create([
            'question' => 'IoTとは何の略でしょう?',
            'category_id' => Category::where('name', 'IT')->first()->id
        ]);

        $quiz->choices()->createMany([
            ['choice' => 'Internet of Things', 'is_correct' => true],
            ['choice' => 'International Organization for Standardization', 'is_correct' => false],
            ['choice' => 'Interactive Online Training', 'is_correct' => false],
        ]);
    }
}
