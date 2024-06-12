<div class="bg-gradient-to-r from-sky-300 to-sky-100 min-h-full">
    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">Welcome to

            </h1>
            <h1 class="text-4xl font-bold leading-none tracking-tight underline underline-offset-8">
                CV. GAPURA INDOTEKNIK
            </h1>
    </section>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div class="relative w-2/3 bg-gray-200 border-2 rounded shadow-lg">
            <div
                class="absolute flex items-center underline underline-offset-3 justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-sky-300 font-bold rounded z-1 left-1/2 -top-12 text-bold">
                Pusat Produksi
            </div>
            <div class="justify-center px-3 py-10 text-center text-wrap">
                Pusat Produksi Mesin dan Peralatan Agroindustri yang dapat memberikan nilai tambah pada UMKM, Menambah
                pendapatan karena mesin dirancang secara efektif, efisien dan otomatis dengan tambahan peralatan
                elektronik yang akan mengurangi tenaga kerja.
                Sebagai Distributor peralatan praktek jurusan teknik pada SMK, STT, POLITEKNIK dan PERGURUAN TINGGI.
            </div>
        </div>
    </section>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div class="relative w-2/3 bg-gray-200 border-2 rounded shadow-lg">
            <div
                class="font-bold absolute underline underline-offset-3 flex items-center justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-sky-300 rounded z-1 left-1/2 -top-12 text-bold">
                Up To Date
            </div>
            <div class="justify-center px-3 py-10 text-center text-wrap">
                Produk kami selalu mengikuti perkembangan kebutuhan pada usaha UMKM, tenaga intelektual kami siap untuk
                memproduksi otomatisasi peralatan sesuai permintaan.
            </div>

        </div>
    </section>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div class="relative w-2/3 bg-gray-200 border-2 rounded shadow-lg">
            <div
                class="font-bold absolute flex items-center underline underline-offset-3 justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-sky-300 rounded z-1 left-1/2 -top-12 text-bold">
                Terpercaya
            </div>
            <div class="justify-center px-3 py-10 text-center text-wrap">
                Produk kami telah dipergunakan oleh UMKM di seluruh indonesia dengan jaminan konsultasi dan garansi yang
                memuaskan.
            </div>
        </div>
    </section>
    <section class="relative px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28 ">
        <div class="py-10 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kami juga menjual mesin produksi
                luar negri dengan jaminan sparepart yang berkelanjutan.</h2>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid max-w-lg gap-8 mx-auto mt-12 select-none lg:max-w-none lg:grid-cols-3 ">
                @foreach ($barang as $barangCard)
                <div
                    class="flex flex-col space-x-3 bg-white overflow-hidden transition duration-150 ease-in-out border-2 rounded-lg shadow-lg shadow-sky-500/50 hover:border-double hover:border-sky-500 ">
                    <a href="/produk/{{ $barangCard->idbarang }}">
                        <div class="py-1 text-sm px-2 bg-gray-300 font-bold">
                            <p>{{ $barangCard->jenis_barang }}</>
                            </p>
                        </div>
                        <div class="flex items-center justify-center py-2">
                            <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-sky-600 font-bold">
                                {{ $barangCard->idbarang }} | <span class="text-black font-bold">{{
                                    Str::limit($barangCard->nama, 50) }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="block py-2 mx-5 text-start text-slate-800 indent-3">
                                {{ Str::limit($barangCard->deskripsi, 150) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="flex justify-center items-center px-6 pt-5 pb-10 !md:flex-col">
        <div class="w-1/2 py-10 text-center justify-items-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kami Juga Mempunyai Produk Katalog
                Silahkan Dicek.</h2>
        </div>
        <div class="w-1/2 justify-items-center">
            <ul class="px-4 space-y-1 border rounded-lg border-sky-500 shadow-lg justify-center items-center bg-white">
                @if ($katalog->isEmpty())
                <li class="text-black">
                    <span>Maaf, katalog sedang kosong</span>
                </li>
                @else
                @foreach ($katalog as $list)
                <li class="text-black hover:text-blue-500">
                    <a href="{{ asset('/' . $list->file_path) }}" download="{{ $list->nama }}">
                        <span>{{ $list->nama }}</span>
                    </a>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
    </section>
    <section class=" flex flex-col items-center justify-center pt-10 space-y-5 pb-5">
        <div>
            <h2 class="py-5 text-3xl font-bold tracking-tight text-center text-gray-900 sm:text-4xl">
                Lokasi Kami</h2>
        </div>
        <div>
            <iframe class="flex flex-grow"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252976.42878918495!2d112.56176884770787!3d-7.815558685631934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c58f144003%3A0x969832f739943280!2sCV.%20GAPURA%20Malang!5e0!3m2!1sen!2sid!4v1717753107621!5m2!1sen!2sid"
                width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</div>