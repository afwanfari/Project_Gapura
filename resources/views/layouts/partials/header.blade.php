<header x-data="{ mobilenavOpen: false }"
    class="md:flex items-center select-none justify-between [&>*]:px-8 sticky top-0 z-50 bg-sky-700 text-white">
    <div class="flex items-center justify-between h-20">
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
                    {{ __('Daftar Produk') }}
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
</header>