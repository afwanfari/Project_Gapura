<div>
    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">PRODUK KAMI
            </h1>
        </div>
    </section>
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/4 mt-10 border-gray-200 font-bold">
            <ul class="px-4 space-y-2">
                <li class="flex justify-start items-center">
                    <input type="text" wire:model.live="search" placeholder="Search for Anything..."
                        class="px-4 py-2 placeholder:italic border rounded-lg h-12 w-full fill-sky-600">
                </li>
                @php
                    $orderedJenisList = [
                        'Usaha Kecil Menengah (UKM)',
                        'Mekatronika',
                        'Listrik',
                        'Elektronika',
                        'TKJ',
                        'Tools',
                        'Pendingin',
                        'Energi terbarukan',
                        'Lab Bahasa',
                        'Otomotif & Ototronik Mobil',
                        'Otomotif & Ototronik Sepeda Motor',
                        'Alat Berat, Bus, Truk',
                        'Perkapalan',
                        'Kereta Api',
                        'Pesawat Udara',
                    ];
                @endphp
                @foreach ($orderedJenisList as $jenis)
                    <li>
                        <a href="#" wire:click.prevent="filterByJenis('{{ $jenis }}')"
                            class="flex items-center justify-start gap-2 py-3 border-2 rounded-lg hover:bg-sky-600 hover:text-white">
                            <img class="w-6 h-6 mx-2 select-none"
                                src="{{ asset('images/' . strtolower(str_replace(' ', '_', $jenis)) . '.png') }}"
                                alt="{{ $jenis }}">
                            <span>{{ $jenis }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="w-full md:w-3/4 mx-2.5 mt-12 select-none">
            <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
                @foreach ($barangs as $barangCard)
                    <div
                        class="flex flex-col space-x-3 overflow-hidden transition duration-150 ease-in-out border-2 rounded-lg shadow-lg shadow-sky-500/50 hover:border-double hover:border-sky-500">
                        <a href="{{ route('produk.detail', ['idbarang' => $barangCard->idbarang]) }}">
                            <div class="flex items-center justify-center py-2">
                                <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                    alt="{{ $barangCard->nama }}">
                            </div>
                            <div class="items-center text-center">
                                <p class="text-sm text-sky-600 font-bold ">
                                    {{ $barangCard->idbarang }} | <span
                                        class="text-black font-bold">{{ Str::limit($barangCard->nama, 50) }}</span>
                                </p>
                            </div>
                            <div>
                                <p class="block py-2 mx-5 text-start text-slate-800 indent-3">
                                    {{ Str::limit($barangCard->deskripsi, 150) }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="items-center justify-center mt-4">
                {{ $barangs->links('vendor.livewire.tailwind', [
                    'forcePage' => $barangs->currentPage() + 1,
                    'scrollTo' => false,
                ]) }}
            </div>
        </div>
    </div>
</div>
