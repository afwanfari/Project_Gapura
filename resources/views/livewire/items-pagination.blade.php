<div>
    <section class="grid mb-10 bg-gray-700 text-white text-center bg-cover relative"
        style="background-image: url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg');">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">GALERI KAMI</h1>
        </div>
    </section>

    <div class="flex-wrap py-10 mx-10 mt-12 select-none justify-items-center">
        <div class="grid grid-cols-4 gap-4 mx-5 overflow-hidden shadow-lg">
            @foreach ($berita as $beritaCard)
                <div class="flex flex-col items-center space-y-2 shadow-lg">
                    <img src="{{ asset('/' . $beritaCard->gambar) }}" alt="{{ $beritaCard->judul }}"
                        class="w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
        <div class="py-5 justify-items-center">
            {{ $berita->links('vendor.pagination.simple-tailwind', ['scrollTo' => false]) }}
        </div>
    </div>

</div>
