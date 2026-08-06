<x-app-layout>
    <x-slot name="header">
        クイズ一覧
    </x-slot>
@foreach($categories as $category)
<div class="py-12">
    <a href="{{ route('quizzes.show', $category) }}">{{ $category->name }}</a>
</div>
@endforeach

</x-app-layout>