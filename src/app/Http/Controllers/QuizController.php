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
        return view('quizzes.index', [
            'categories' => $categories,
        ]);
    }
    public function show(Category $category)
    {
        return view('quizzes.show', [
            'category' => $category,
        ]);
    }
}
