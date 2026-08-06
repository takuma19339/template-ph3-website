<x-app-layout>
    <x-slot name="header" >
        クイズ一覧
    </x-slot>
<div class="py-12">
    <ul>
    @foreach($category->quizzes as $quiz)
    <div class="m-12">
        <h1>{{ $quiz->question}}</h1>
        <br/>
        <ul>
            @foreach ($quiz->choices as $choice)
            <li>{{ $choice->choice }}</li>
            @endforeach
        </ul>
        <br/>
    </div>
    @endforeach
    </ul>
</div>
</x-app-layout>
