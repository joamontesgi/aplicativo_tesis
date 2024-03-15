@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Test</h2>
    <form action="{{ route('lessons.submitTest') }}" method="post">
        @csrf
        @foreach ($questions as $index => $question)
            <div class="mb-3">
                <div class="card">
                    <div class="card-header">
                        Pregunta {{ $index + 1 }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $question['question'] }}</h5>
                        @foreach ($question['options'] as $key => $option)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $index }}]" id="option{{ $index }}{{ $key }}" value="{{ $key }}">
                                <label class="form-check-label" for="option{{ $index }}{{ $key }}">
                                    {{ $option }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg">Enviar respuestas</button>
        </div>
    </form>
</div>
@endsection
