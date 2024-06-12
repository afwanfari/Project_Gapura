<div>
    <section class="grid mb-10 bg-gray-700 text-white text-center bg-cover relative"
        style="background-image: url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg');">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">GALERI KAMI
            </h1>
        </div>
    </section>
    <div class="flex flex-col py-10 mx-10 mt-12 select-none justify-items-center">
        <div class="grid grid-cols-4 gap-4 mx-5 overflow-hidden ">
            @if ($berita->isEmpty())
                <div class="col-span-4 text-center">
                    <span>Maaf, tidak ada berita saat ini.</span>
                </div>
            @else
                @foreach ($berita as $beritaCard)
                    <div class="flex flex-col items-center space-y-2 shadow-lg rounded-lg">
                        <img src="{{ asset('/' . $beritaCard->gambar) }}" alt="{{ $beritaCard->judul }}"
                            class="w-full h-60 object-cover rounded-lg">
                        <p class="text-lg">
                            {{ $beritaCard->judul }}
                        </p>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="py-5 justify-items-center">
            {{ $berita->links('vendor.livewire.tailwind', ['forcePage' => $berita->currentPage() + 1, 'scrollTo' => false]) }}
        </div>
    </div>
</div>
