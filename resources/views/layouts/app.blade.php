<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images\logo.jpg') }}" type="image/png">
    <title>@yield('title', 'GAPURA')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="font-serif antialiased">
    @include('layouts.partials.header')
    @yield('hero')
    <main class="container mx-auto px-5 flex flex-grow mt-16">
        {{ $slot }}
    </main>
    @include('layouts.partials.footer')
    @stack('modals')
    @livewireScripts
</body>

</html>
