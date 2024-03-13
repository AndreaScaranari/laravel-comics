<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Vite -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('includes.header')

    @yield('main-content')

</body>

</html>
