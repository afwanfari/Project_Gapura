<x-app-layout>
    @section('title', 'KONTAK | GAPURA')
    @section('hero')
        <div>
            <section class="flex justify-center items-center px-6 pt-2 pb-10 !md:flex-col ">
                <div class="w-1/2 justify-items-start">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact Us</h2>
                    <p>Hubungi Kami terkait produk yang anda sukai.</p>
                    <h1 class="text-xl pt-2.5 font-bold tracking-tight text-gray-900">Kantor Umum</h1>
                    <p>
                        Jl Raden Intan Terminal Arjosari Blok A/34 Arjosari Blimbing Kota Malang Jawa Timur Indonesia 65126
                        Jawa
                        Timur Indonesia
                    </p>
                    <p>
                        Yusron (+62) 851 0119 5575
                    </p>
                </div>
                <div class="w-1/2 py-10 text-center justify-items-center mx-5">
                    <div class="card h-fit max-w-6xl p-5 md:p-12 rounded-lg border border-1" id="form">
                        <h2 class="mb-4 text-2xl font-bold ">Silahkan Hubungi Kami</h2>
                        @livewire('contact-form')
                    </div>
                </div>
            </section>
            <section class="space-y-3 mx-2.5 justify-items-center">
                <div class="justify-items-center text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Pertanyaan Populer</h2>
                </div>
                <div x-data="{ open: false }" class="border border-1 w-1/2 justify-items-center rounded-lg px-3">
                    <button @click=" open=! open" class="text-xl font-bold tracking-tight text-gray-900">Kenapa
                        Kami?</button>
                    <div x-show="open" x-transition>
                        Produk-produk kami selalu mengikuti perkembangan ilmu pengetahuan dan teknologi dalam masyarakat
                    </div>
                </div>
                <div x-data="{ harga: false }" class="border border-1 w-1/2 justify-items-center rounded-lg px-3">
                    <button @click=" harga=! harga" class="text-xl font-bold tracking-tight text-gray-900">Harga?</button>
                    <div x-show="harga" x-transition>
                        Terjangkau untuk ukuran trainer Nasional, lengkap dengan jobsheet yang berisi: Tujuan, Waktu,
                        Peralatan
                        dan Bahan, Petunjuk Keselamatan Kerja, Langkah Kerja, Cara Kerja, Tugas dan Penilaian
                        Pekerjaan/Skore
                    </div>
                </div>
            </section>
        </div>

    @endsection
</x-app-layout>
