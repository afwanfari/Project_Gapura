<div>
    <div class="flex py-32 bg-gray-700">
        <p class="text-white hero">Galeri</p>
    </div>
    {{-- <div class="text-center py-10">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Galeri Kami.</h2>
        <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
            This is your life and it's ending one minute @ a time...</p>
    </div> --}}
    <div class=" flex-wrap justify-items-center mx-10 py-10 mx-auto mt-12 select-none">
        <div class="grid grid-cols-5 gap-4 mx-5 overflow-hidden space-x-3 shadow-lg">
            @foreach($berita as $beritaCard)
            <div class="">
                <img src="{{ asset('/' . $beritaCard->gambar) }}" alt="{{ $beritaCard->judul }}" class="w-30 h-30">
                <span class="justify-items-center">{{$beritaCard->judul}}</span>
            </div>
            @endforeach
        </div>
        <div class="justify-items-center py-5">
            {{ $berita->links('vendor.pagination.simple-tailwind',data: ['scrollTo' => false]) }}
        </div>
    </div>

</div>
