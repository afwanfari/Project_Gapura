<div>
    <!-- home.blade.php -->
    <div class="items-center block px-10 py-10 space-y-4 text-center ">
        <h1 class="hero">Welcome to Harapan Bangsa Trainer
            Center Indonesia</h1>
    </div>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div x-data="{ sectionproduksi: false }" class="relative w-2/3 bg-gray-300 rounded shadow-lg">
            <div
                class="absolute flex items-center justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-yellow-300 rounded z-1 left-1/2 -top-12 text-bold">
                Pusat Produksi
            </div>
            <div x-show="sectionproduksi" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="px-3 py-10 text-wrap">
                Education Equipment / Education Aid / Teaching Aid / Trainer / Peraga
                / Alat Peraga / Alat Praktek / Media Belajar / Media Pembelajaran /
                Media Pendidikan / Peraga Pendidikan, Laboratorium Bahasa / Lab Bahasa
                untuk dipergunakan di : SMP, SMU / SMA, SMK / STM / ST, PLS / LEMBAGA
                KURSUS, BLK, PUSDIKLAT,AKADEMI, POLITEKNIK, SEKOLAH TINGGI DAN
                UNIVERSITAS.
            </div>
            <div x-show="!sectionproduksi" x-transition
                class="justify-center px-3 py-10 text-2xl text-center text-wrap">
                Education Equipment / Education Aid / Teaching Aid / Trainer
            </div>

            <div class="flex justify-center">
                <a x-on:click="sectionproduksi = !sectionproduksi"
                    class="mt-4 text-2xl transition transform cursor-pointer"
                    x-bind:class="{'mt-24': sectionproduksi, 'mt-24': !sectionproduksi}"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-4">
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div x-data="{ sectionabout: false }" class="relative w-2/3 bg-gray-300 rounded shadow-lg">
            <div
                class="absolute flex items-center justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-yellow-300 rounded z-1 left-1/2 -top-12 text-bold">
                Produk Kami
            </div>
            <div x-show="sectionabout" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="px-3 py-10 text-wrap">
                Kami Memproduksi :
                Education Equipment / Education Aid / Teaching Aid / Trainer / Peraga / Alat Peraga / Alat Praktek /
                Media Belajar / Media Pembelajaran / Media Pendidikan / Peraga Pendidikan:
                ELEKTRONIKA / ELECTRONIC,MEKATRONIKA / MECHATRONICS / ELEKTRONIKA INDUSTRI,LISTRIK /
                ELECTRICITY,OTOMOTIF / AUTOMOTIVE,OTOTRONIK / AUTOTRONIC,PENDINGIN / REFRIGERANT,
                ENERGI TERBARUKAN / RENEWABLE ENERGY,PERKAPALAN / SHIPPING / PELAYARAN / KEMARITIMAN,PESAWAT UDARA /
                PESAWAT TERBANG / AIRCRAFT,
                ALAT BERAT / HEAVY EQUIPMENT,KERETA API / TRAIN,LABORATORIUM BAHASA / LANGUAGE LABORATORY,USAHA KECIL
                MENENGAH / TEKNOLOGI TEPAT GUNA,
                TEKNIK KOMPUTER DAN JARINGAN.
            </div>
            <div x-show="!sectionabout" x-transition class="justify-center px-3 py-10 text-2xl text-center text-wrap">
                Kami hadir sejak 1996 hingga saat ini di tahun 2024
                KUALITAS TINGGI PRODUK DALAM NEGERI
            </div>

            <div class="flex justify-center">
                <a x-on:click="sectionabout = !sectionabout" class="mt-4 text-2xl transition transform cursor-pointer"
                    x-bind:class="{'mt-24': sectionabout, 'mt-24': !sectionabout}"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-4">
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>
    <section class="relative px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28 ">
        <div class="py-10 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kami Juga Memproduksi Trainer Dengan
                Spesifikasi Produk Import.</h2>
            <p class="max-w-2xl mx-auto mt-3 text-xl text-gray-500 sm:mt-4">
                Silahkan Memesan Kepada Kami. Cintailah produk Indonesia</p>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid max-w-lg gap-8 mx-auto mt-12 select-none lg:max-w-none lg:grid-cols-3 ">
                @foreach($barangs as $barangCard)
                <div class="card ">
                    <a href="/produk/{{$barangCard->idbarang}}">
                        <div class="py-1 text-sm bg-gray-300 ">
                            <p>{{ $barangCard->jenisbarang->jenis}}</>
                            </p>
                        </div>
                        <div class="flex items-center justify-center py-2">
                            <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-indigo-600">
                                {{ $barangCard->idbarang }}|<span class="text-black">{{Str::limit($barangCard->nama,50)
                                    }}</span></p>
                            </p>
                        </div>
                        <div>
                            <p class="block py-2 mx-5 indent-3">{{Str::limit($barangCard->deskripsi,150) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>