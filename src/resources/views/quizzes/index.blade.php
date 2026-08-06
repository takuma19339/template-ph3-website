<x-app-layout>
    <x-slot name="header" />
@foreach($categories as $category)
<div>
        <h2>{{ $category->name }}</h2>
        <ul>
            @foreach($category->quizzes as $quiz)
                <li><a href="{{ route('quizzes.show', $quiz) }}">{{ $quiz->question }}</a></li>
            @endforeach
        </ul>
    </div>
@endforeach

</x-app-layout>