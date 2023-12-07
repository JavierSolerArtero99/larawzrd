<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> @yield('title') </title>

    @livewireStyles

    @vite('resources/css/app.css')
</head>

<body>

    @include('sections.header.header')

    @yield('content')

    @include('sections.footer.footer')

    @livewireScripts
    
</body>

</html>