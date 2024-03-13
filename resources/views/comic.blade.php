@extends('layouts.main')

@section('title', 'Comic')

@section('main-content')
    <main>
        <div class="container">
            <h1 class="text-center">{{ $comic['series'] }}</h1>
            <h3 class="text-center">{{ $comic['type'] }}</h3>
            <div class="d-flex w-50 py-4 mx-auto">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="img-fluid col-6">
                <div class="col-6">
                    {{ $comic['text'] }}
                </div>
            </div>
        </div>
    </main>
@endsection
