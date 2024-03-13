@extends('layouts.main')

@section('title')
    {{ $comic['series'] }}
@endsection

@section('cdnjs')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <main>
        <div class="container w-50">
            <div class="d-flex justify-content-between align-items-center">
                <nav id="prev">
                    <i class="fas fa-4x fa-chevron-left"></i>
                </nav>
                <div class="title">
                    <h1 class="text-center">{{ $comic['series'] }}</h1>
                    <h3 class="text-center">{{ $comic['type'] }}</h3>
                </div>
                <nav id="prev">
                    <i class="fas fa-4x fa-chevron-right"></i>
                </nav>
            </div>
            <div class="d-flex py-4 mx-auto justify-content-evenly ">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="img-fluid col-5">
                <div class="col-5">
                    {{ $comic['text'] }}
                </div>
            </div>
        </div>
    </main>
@endsection
