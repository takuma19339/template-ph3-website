<x-app-layout>
    <x-slot name="header" >
        クイズ一覧
    </x-slot>
<div class="py-12">
    <div id="delete-modal" style="display:none;">
        <p>本当に削除しますか?</p>
        <button onclick="confirmDelete()">はい</button>
        <button onclick="closeModal()">キャンセル</button>
    </div>
    @if(session('message'))
        <div class="text-green-500">
            {{ session('message') }}
        </div>
    @endif
    <ul>
    @foreach($category->quizzes as $quiz)
    <div class="m-12">
        <h1>{{ $quiz->question}}</h1>
        <a href="{{ route('quizzes.edit', $quiz) }}" class="text-blue-500">編集</a>
        <button type="button" onclick="showDeleteModal({{ $quiz->id }})">削除</button>

        <form id="delete-form-{{ $quiz->id }}" action="{{ route('quizzes.destroy', $quiz) }}" method="POST" style="display:none;">
            @csrf
            @method('DELETE')
        </form>
        <br/>
        <ul>
            @foreach ($quiz->choices as $choice)
            <li class="choice" data-correct="{{ $choice->is_correct ? 'true' :'false' }}">{{ $choice->choice }}</li>
            @endforeach
        </ul>
        <br/>
    </div>

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

    let targetQuizId = null;

    function showDeleteModal(quizId) {
        targetQuizId = quizId;
        document.getElementById('delete-modal').style.display = 'block';
    }

    function confirmDelete() {
        if (targetQuizId !== null) {
            document.getElementById('delete-form-' + targetQuizId).submit();
        }
    }

    function closeModal() {
        document.getElementById('delete-modal').style.display = 'none';
    }
</script>
