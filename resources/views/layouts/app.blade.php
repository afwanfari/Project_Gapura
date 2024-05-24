<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images\logo.jpg') }}" type="image/png">
    <title>@yield('title', 'GAPURA')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
    <!-- Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="font-serif antialiased">
    @include('layouts.partials.header')
    @yield('hero')
    <main class="container flex flex-grow px-5 mx-auto mt-16">
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')
    @stack('modals')
    @livewireScripts
</body>

</html>