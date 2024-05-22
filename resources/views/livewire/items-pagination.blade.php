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
