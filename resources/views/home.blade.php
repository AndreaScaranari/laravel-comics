@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <main>
        <div class="container">
            <h2 class="text-center py-3 m-0">Lista fumetti in archivio</h2>
            <ul class="row">
                @foreach ($comics as $index => $comic)
                    <li class="list-unstyled col-3 p-2 text-center">

                        @include('includes.card')

                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
