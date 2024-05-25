<div>
    <!-- home.blade.php -->
    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">Welcome to
                Harapan
                Bangsa Trainer
                Center Indonesia</h1>
    </section>
    </hero>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div x-data="{ sectionproduksi: false }" class="relative w-2/3 bg-gray-200 border-2 rounded shadow-lg">
            <div
                class="absolute flex items-center justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-yellow-300 rounded z-1 left-1/2 -top-12 text-bold">
                Pusat Produksi
            </div>
            <div x-show="!sectionproduksi" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-8"
                class="justify-center px-3 py-10 text-center text-wrap">
                Education Equipment / Education Aid / Teaching Aid / Trainer / Peraga / Alat Peraga / Alat Praktek /
                Media Belajar / Media Pembelajaran / Media Pendidikan / Peraga Pendidikan, Laboratorium Bahasa / Lab
                Bahasa untuk dipergunakan di :
                SMP, SMU / SMA, SMK / STM / ST, PLS / LEMBAGA KURSUS, BLK, PUSDIKLAT,AKADEMI, POLITEKNIK, SEKOLAH TINGGI
                DAN UNIVERSITAS.
            </div>
            <div x-show="sectionproduksi" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-8"
                class="justify-center px-3 py-10 text-center text-wrap">
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
                    <img src="{{ asset('\images\down-arrow.png') }}" alt="" class="w-6 h-6 select-none ">
                </a>
            </div>
        </div>
    </section>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div x-data="{ sectionproduk: false }" class="relative w-2/3 bg-gray-200 border-2 rounded shadow-lg">
            <div
                class="absolute flex items-center justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-yellow-300 rounded z-1 left-1/2 -top-12 text-bold">
                Up To Date
            </div>
            <div x-show="!sectionproduk" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-8"
                class="justify-center px-3 py-10 text-center text-wrap">
                Produk kami selalu Up to date, Mendukung penuh kurikulum Nasional, Memacu percepatan belajar, Menaikkan
                nilai Kompetensi Siswa dan Mahasiswa. Produk Indonesia untuk digunakan di dalam dan luar Negeri.
            </div>
            <div x-show="sectionproduk" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-8"
                class="justify-center px-3 py-10 text-center text-wrap">
                Produk kami selalu Up to date, Mendukung penuh kurikulum Nasional, Memacu percepatan belajar, Menaikkan
                nilai Kompetensi Siswa dan Mahasiswa. Produk Indonesia untuk digunakan di dalam dan luar Negeri.
                Produk trainer kami didesain berdasarkan kaidah Pendidikan yang meliputi faktor keamanan, kenyamanan,
                detail penilaian praktek, ukuran dan model trainer dan sebagainya, dirancang oleh Tim ahli Elektronika,
                Mekatronika, Listrik, Otomotif, Ototronik, Pendingin, Energi Terbarukan, Perkapalan, Pesawat
                Udara/Pesawat Terbang, Alat Berat, Kereta Api, Laboratorium Bahasa, Teknik Komputer Jaringan, Usaha
                Kecil Menengah/Teknologi Tepat Guna lulusan dalam dan luar negeri yang bersertifikat di bidangnya dan
                masih aktif pada jabatannya di lembaga Nasional sampai saat ini tahun 2024/2025. Dibuat dengan teliti
                dan dilakukan Quality Control yang ketat oleh tenaga teknik pilihan.
            </div>
            <div class="flex justify-center">
                <a x-on:click="sectionproduk = !sectionproduk" class="mt-4 text-2xl transition transform cursor-pointer"
                    x-bind:class="{'mt-24': sectionproduk, 'mt-24': !sectionproduk}"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-4">
                    <img src="{{ asset('\images\down-arrow.png') }}" alt="" class="w-6 h-6 select-none ">
                </a>
            </div>
        </div>
    </section>
    <section class="flex justify-center py-20 mx-5 space-y-24">
        <div x-data="{ sectiontrust: false }" class="relative w-2/3 bg-gray-200 border-2 rounded shadow-lg">
            <div
                class="absolute flex items-center justify-center w-56 h-20 text-3xl -translate-x-1/2 bg-yellow-300 rounded z-1 left-1/2 -top-12 text-bold">
                Terpercaya
            </div>
            <div x-show="!sectiontrust" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-8"
                class="justify-center px-3 py-10 text-center text-wrap">
                Produk kami telah dipercaya dan telah dipergunakan di seluruh Indonesia dan luar negeri.
                Produk Kami beda dengan Produk lain, Mohon hati-hati dengan produk tiruan...SEGERA BUKTIKAN...!
                Kami hadir sejak 1996 hingga saat ini di tahun 2024
            </div>
            <div x-show="sectiontrust" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-8"
                class="justify-center px-3 py-10 text-center text-wrap">
                Produk kami telah dipercaya dan telah dipergunakan di seluruh Indonesia dan luar negeri.
                Produk Kami beda dengan Produk lain, Mohon hati-hati dengan produk tiruan...SEGERA BUKTIKAN...!
                Kami hadir sejak 1996 hingga saat ini di tahun 2024
            </div>
            <div class="flex justify-center">
                <a x-on:click="sectiontrust = !sectiontrust" class="mt-4 text-2xl transition transform cursor-pointer"
                    x-bind:class="{'mt-24': sectiontrust, 'mt-24': !sectiontrust}"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-4">
                    <img src="{{ asset('\images\down-arrow.png') }}" alt="" class="w-6 h-6 select-none ">
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
                @foreach($barang as $barangCard)
                <div
                    class="flex flex-col space-x-3 overflow-hidden transition duration-150 ease-in-out border-2 rounded-lg shadow-lg shadow-sky-500/50 hover:border-double hover:border-sky-500 ">
                    <a href="/produk/{{$barangCard->idbarang}}">
                        <div class="py-1 text-sm bg-gray-300 ">
                            <p>{{ $barangCard->jenis_barang}}</>
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
                            <p class="block py-2 mx-5 text-start text-slate-800 indent-3">
                                {{Str::limit($barangCard->deskripsi,150) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="flex justify-between items-center px-6 pt-5 pb-10 ">
        <div class="w-1/2 py-10 text-center justify-items-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kami Juga Mempunyai Produk Katalog
                Silahkan Dicek.</h2>
        </div>
        <div class="w-1/2 justify-items-center mt-10">
            <ul
                class="px-4 space-y-1 border border-sky-500 shadow-lg justify-center items-center *:hover:underline-offset-1">
                @foreach ($katalog as $list)
                <li class="text-black hover:text-blue-500">
                    <a href="#" class=" flex items-center gap-2 py-1 ">
                        <p>{{$list->nama}}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class=" grid items-center justify-center pt-10 space-y-5">
        <div>
            <h2 class="py-5 text-3xl font-bold tracking-tight text-center text-gray-900 sm:text-4xl">
                Lokasi Kami</h2>
        </div>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15818.497634429254!2d112.77893898855258!3d-7.615783650025406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7dab7f4ca5af1%3A0xa75a0d6b223a65d1!2sHarapan%20Bangsa%20Trainer%20Center%20Indonesia.%20PT!5e0!3m2!1sid!2sid!4v1716555184030!5m2!1sid!2sid"
                width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>
</div>