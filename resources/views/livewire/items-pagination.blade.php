<div>
    <div class="flex py-32 bg-gray-700">
        <p class="text-white py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">Galeri
        </p>
    </div>
    <div class="flex-wrap py-10 mx-10 mt-12 select-none justify-items-center">
        <div class="grid grid-cols-5 gap-4 mx-5 space-x-3 overflow-hidden shadow-lg">
            @foreach($berita as $beritaCard)
            <div class="flex space-x-2 space-y-2 shadow-lg">
                <img src="{{ asset('/' . $beritaCard->gambar) }}" alt="{{ $beritaCard->judul }}" class="w-30 h-30">
            </div>
            @endforeach
        </div>
        <div class="py-5 justify-items-center">
            {{ $berita->links('vendor.pagination.simple-tailwind',data: ['scrollTo' => false]) }}
        </div>
    </div>

</div>