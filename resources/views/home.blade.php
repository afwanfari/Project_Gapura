<x-app-layout>
    @section('title')
    HOME | GAPURA
    @endsection
    @section('hero')
    <div class="items-center block px-10 py-24 space-x-4 text-center text-white bg-gray-500">
        <h1 class="text-2xl font-bold leading-none">Welcome to Harapan Bangsa Trainer
            Center Indonesia</h1>
        <p class="mt-6 text-lg font-light">Pusat Produksi :
            Education Equipment / Education Aid / Teaching Aid / Trainer / Peraga / Alat Peraga / Alat Praktek /
            Media Belajar / Media Pembelajaran / Media Pendidikan / Peraga Pendidikan, Laboratorium Bahasa / Lab
            Bahasa untuk dipergunakan di :
            SMP, SMU / SMA, SMK / STM / ST, PLS / LEMBAGA KURSUS, BLK, PUSDIKLAT,
            AKADEMI, POLITEKNIK, SEKOLAH TINGGI DAN UNIVERSITAS.</p>
        <p>
            <x-button>Get Started</x-button>
        </p>
    </div>
    <div class="relative px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28 2/3">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-xl font-bold tracking-tight text-gray-900 ">Kami Juga Memproduksi Trainer
                    Dengan Spesifikasi Produk Import.</h2>
                <p class="max-w-2xl mx-auto mt-3 text-xl text-gray-500 sm:mt-4">
                    This is your life and it's ending one minute @ a time...</p>
            </div>
            <div class="grid max-w-lg gap-8 mx-auto mt-12 select-none lg:max-w-none lg:grid-cols-3 ">
                @foreach($barangs as $barangCard)
                <div
                    class="flex flex-col space-x-3 overflow-hidden border-2 rounded-lg shadow-lg hover:border-double hover:border-sky-500 ">
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
    </div>
    @endsection

</x-app-layout>