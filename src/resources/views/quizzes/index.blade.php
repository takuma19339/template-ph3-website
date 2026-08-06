@foreach($categories as $category)
    <div>
        <h2>{{ $category->name }}</h2>
        @foreach($category->quizzes as $quiz)
            <a href="{{ route('quizzes.show', $quiz) }}">{{ $quiz->question }}</a>
        @endforeach
    </div>
@endforeach