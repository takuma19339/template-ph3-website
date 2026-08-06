<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
class QuizController extends Controller
{
    public function show(Quiz $quiz)
    {
        return view('quizzes.show', ['quiz' => $quiz]);
    }
}
