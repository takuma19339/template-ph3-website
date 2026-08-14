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
        $category->load('quizzes.choices');
        return view('quizzes.show', [
            'category' => $category,
        ]);
    }
    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', [
            'quiz' => $quiz,
        ]);
    }
    public function update(Request $request, Quiz $quiz)
    {
        $quiz->update([
            'question' => $request->question,
        ]);

        return redirect()->route('quizzes.show', $quiz->category)->with('message','更新されました');
    }
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quizzes.show', $quiz->category)->with('message','削除されました');
    }
}
