<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class AdminQuizController extends Controller
{
    public function index()
    {
    $quizzes = Quiz::paginate(20);
        return view('admin.quizzes.index', [
            'quizzes' => $quizzes,
        ]);
    }

    public function edit(Quiz $quiz)
    {
        return view('admin.quizzes.edit', [
            'quiz' => $quiz,
        ]);
    }
    public function update(Request $request, Quiz $quiz)
    {
        $quiz->update([
            'question' => $request->question,
        ]);

        return redirect()->route('admin.quizzes.index')->with('message','更新されました');
    }
}

