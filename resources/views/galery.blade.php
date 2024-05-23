<x-app-layout>
    @section('title')
    GALERI | GAPURA
    @endsection
    @section('hero')
    <div class="flex py-32 bg-gray-300">
        <h2 class="hero px-5 text-gray-900">Galeri Kami.</h2>
    </div>
    <div class="justify-items-center">
        @livewire('items-pagination')
    </div>
    @endsection

</x-app-layout>