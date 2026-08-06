<x-app-layout>
    <x-slot name="header">
        クイズ編集
    </x-slot>
    <div class="py-12">
        <form method="POST" action="{{ route('quizzes.update', $quiz) }}">
            @csrf
            @method('PUT')
            <div>
                <label for="question">問題文</label>
                <input type="text" name="question" id="question" value="{{ $quiz->question }}" required>
            </div>
            <div>
                <label for="choices">選択肢</label>
                @foreach ($quiz->choices as $choice)
                    <div>
                        <input type="text" name="choice" value="{{ $choice->choice }}" required>
                    </div>
                @endforeach
            </div>
            <button type="submit">更新</button>
        </form>
    </div>
</x-app-layout>