<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Category;

class QuizController extends Controller
{
    public function index()
    {
    $categories = Category::all();
    $quizzes = Quiz::all();
        return view('quizzes.index', [
            'quizzes' => $quizzes,
            'categories' => $categories,
        ]);
    }
    public function show(Quiz $quiz)
    {
        return view('quizzes.show', ['quiz' => $quiz]);
    }
}
