<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images\logo.jpg') }}" type="image/png">
    <title>@yield('title', 'GAPURA')</title>
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
    <!-- Script -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Livewire Styles -->
    @livewireStyles

</head>

<body class="font-tiny5-regular"">
    @include('layouts.partials.header')
    @yield('hero')
    <main class="container flex flex-grow px-5 mx-auto mt-16">
        {{ $slot }}
    </main>
    @livewire('footer-component')
    @stack('modals')
    @livewireScripts
</body>

</html>