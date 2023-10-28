@extends('rootFolder.app')

@section('title', 'HomePage')

@section('content')
        <div class="container">
            @foreach ($quizzes as $quiz)
                <div class="quiz-card">
                    <h1>{{ $quiz['name'] }}</h1>
                    <img src="{{ asset('images/' . $quiz['photo']) }}" alt="{{ $quiz['name'] }} Image">
                    <p>Status:
                        <span class="badge {{ $quiz['status'] === 'open' ? 'badge-success' : 'badge-danger' }}">
                            {{ $quiz['status'] }}
                        </span>
                    </p>
                </div>
            @endforeach
        </div>
        <div class="container">
        <h2>Quizzes</h2>
        <ul>
            @foreach ($quizzes as $quiz)
                <li>{{ $quiz->name }}</li>
            @endforeach
        </ul>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    
@endsection