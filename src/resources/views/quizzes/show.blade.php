<x-app-layout>
    <x-slot name="header" >
        クイズ一覧
    </x-slot>
<div class="py-12">
    <ul>
    @foreach($category->quizzes as $quiz)
    <div class="m-12">
        <h1>{{ $quiz->question}}</h1>
        <a href="{{ route('quizzes.edit', $quiz) }}" class="text-blue-500">編集</a>
        <br/>
        <ul>
            @foreach ($quiz->choices as $choice)
            <li class="choice" data-correct="{{ $choice->is_correct ? 'true' :'false' }}">{{ $choice->choice }}</li>
            @endforeach
        </ul>
        <br/>
    </div>
    @if(session('message'))
        <div class="text-green-500">
            {{ session('message') }}
        </div>
    @endif
    @endforeach
    </ul>
</div>
</x-app-layout>

<script>
    const choices = document.querySelectorAll('.choice');
    choices.forEach(choice => {
        choice.addEventListener('click', () => {
            const isCorrect = choice.dataset.correct === 'true';
            if (isCorrect) {
                choice.innerHTML += '   正解です！';
            } else {
                choice.innerHTML += '   不正解です。';
            }
        });
    });
</script>
