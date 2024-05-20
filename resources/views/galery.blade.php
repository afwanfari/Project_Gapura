<x-app-layout>
    @section('title')
    GALERI | GAPURA
    @endsection
    @section('hero')
    <div class="text-center py-10">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Galeri Kami.</h2>
        <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
            This is your life and it's ending one minute @ a time...</p>
    </div>
    <div class="justify-items-center">
        @livewire('items-pagination')
    </div>
    @endsection

</x-app-layout>