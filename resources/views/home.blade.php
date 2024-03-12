<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('includes.header')

    <main>
        <div class="container">
            <h2 class="text-center py-3">Lista fumetti in archivio</h2>
            <ul class="d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <li class="list-unstyled col-3 py-2">{{ $comic['series'] }}</li>
                @endforeach
            </ul>
        </div>
    </main>

</body>

</html>
