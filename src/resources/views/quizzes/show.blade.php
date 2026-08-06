<div>
    <h1>{{ $quiz->question}}</h1>
    <br/>
    <ul>
    @foreach ($quiz->choices as $choice)
        <li>{{ $choice->choice }}</li>
    @endforeach
    </ul>
</div>
