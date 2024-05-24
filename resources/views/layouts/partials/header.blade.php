<header x-data="{ mobilenavOpen: false }" class="header">
   <div class="flex items-center justify-between h-20 ">
      <x-application-mark />
      <mobileicon class="md:hidden">
         <a @click="mobilenavOpen = !mobilenavOpen"
            class="flex items-center justify-center w-12 h-12 rounded-lg cursor-pointer hover:bg-gray-700">
            <img x-show="!mobilenavOpen" class="w-6 h-6 select-none"
               src="https://img.icons8.com/small/64/ffffff/menu.png" />
            <img x-show="mobilenavOpen" x-cloak class="w-6 h-6 select-none"
               src="https://img.icons8.com/small/64/ffffff/delete-sign.png" />
         </a>
      </mobileicon>
   </div>
   <nav x-show="mobilenavOpen" x-cloak
      class="md:!block h-screen select-none w-screen md:h-auto md:w-auto md:relative z-[-1]"
      x-transition:enter="duration-300 ease-out" x-transition:enter-start="opacity-0 -translate-y-96"
      x-transition:enter-end="opacity-100 translate-y-0">
      <ul class="flex flex-col items-center justify-center h-full gap-2 -translate-y-10 md:flex-row md:translate-y-0">
         <li>
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
               {{ __('Beranda') }}
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('produk') }}" :active="request()->routeIs('produk')">
               {{ __('Produk') }}
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('trainer') }}" :active="request()->routeIs('trainer')">
               {{ __('Trainer') }}
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('galery') }}" :active="request()->routeIs('galery')">
               {{ __('Galeri') }}
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
               {{ __('Tentang Kami') }}
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
               {{ __('Kontak') }}
            </x-nav-link>
         </li>
      </ul>
   </nav>

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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Script -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Livewire Styles -->
        @livewireStyles
    </head>

    <body class="font-serif antialiased">
        @include('layouts.partials.header')
        @yield('hero')
        <main class="container mx-auto px-5 flex flex-grow mt-16">
            @yield('content')
        </main>

        @include('layouts.partials.footer')
        @stack('modals')
        @livewireScripts
    </body>

    </html>
