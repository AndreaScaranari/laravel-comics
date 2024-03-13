<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'DC Comics') }} | @yield('title') </title>

    <!-- Vite -->
    @vite('resources/js/app.js')

    @yield('cdnjs')

</head>

<body>

    @include('includes.header')

    @yield('main-content')

</body>

</html>
