<div>
    <div class="flex py-32 bg-gray-700">
        <p class="text-white hero">Galeri</p>
    </div>
    <div class="flex-wrap py-10 mx-10 mx-auto mt-12 select-none justify-items-center">
        <div class="grid grid-cols-5 gap-4 mx-5 space-x-3 overflow-hidden shadow-lg">
            @foreach($berita as $beritaCard)
            <div class="">
                <img src="{{ asset('/' . $beritaCard->gambar) }}" alt="{{ $beritaCard->judul }}" class="w-30 h-30">
                <span class="justify-items-center">{{$beritaCard->judul}}</span>
            </div>
            @endforeach
        </div>
        <div class="py-5 justify-items-center">
            {{ $berita->links('vendor.pagination.simple-tailwind',data: ['scrollTo' => false]) }}
        </div>
    </div>

</div>