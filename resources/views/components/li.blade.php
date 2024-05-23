<a wire:navigate {{ $attributes->merge(['class' => 'flex items-center cursor-pointer justify-start gap-2 py-3 transition
    duration-150
    ease-in-out
    border-2 rounded-lg
    hover:bg-orange-500 hover:text-white shadow-lg']) }}>{{ $slot }}</a>