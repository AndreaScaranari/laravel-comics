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
        <p>Lista fumetti in archivio</p>
        <ul>
            @foreach ($comics as $comic)
                <li>{{ $comic['series'] }}</li>
            @endforeach
        </ul>
    </main>

</body>

</html>
