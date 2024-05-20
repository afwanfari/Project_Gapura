<nav x-show="mobilenavOpen" x-cloak class="md:!block h-screen w-screen md:h-auto md:w-auto md:relative z-[-1]"
    x-transition:enter="duration-300 ease-out" x-transition:enter-start="opacity-0 -translate-y-96"
    x-transition:enter-end="opacity-100 translate-y-0">
    <ul class="flex items-center gap-2 flex-col md:flex-row justify-center h-full -translate-y-10 md:translate-y-0">
        <li>
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="{{ route('product') }}" :active="request()->routeIs('product')">
                {{ __('Product') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="{{ route('trainer') }}" :active="request()->routeIs('trainer')">
                {{ __('Trainer') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="{{ route('galery') }}" :active="request()->routeIs('galery')">
                {{ __('Gallery') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                {{ __('About us') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-nav-link>
        </li>
    </ul>
</nav>