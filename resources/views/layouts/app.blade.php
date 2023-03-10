<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo', 'Dc Comics')</title>
</head>

<body>
    @include('partials.header')
    @include('partials.jumbo')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @vite('resources/js/app.js')
</body>

</html>
