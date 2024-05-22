<x-app-layout>
    @section('title')
    HOME | GAPURA
    @endsection
    @section('hero')
    <div class="block py-24 px-10 bg-gray-500 text-white text-center items-center space-x-4">
        <h1 class="text-2xl font-bold leading-none">Welcome to Harapan Bangsa Trainer
            Center Indonesia</h1>
        <p class="text-lg mt-6 font-light">Pusat Produksi :
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
            <div class="h-1/3 bg-white sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-xl font-bold tracking-tight text-gray-900 ">Kami Juga Memproduksi Trainer
                    Dengan Spesifikasi Produk Import.</h2>
                <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                    This is your life and it's ending one minute @ a time...</p>
            </div>
            <div class="mx-auto mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-3 select-none  ">
                @foreach($barangs as $barangCard)
                <div
                    class="flex flex-col overflow-hidden space-x-3 rounded-lg shadow-lg border-2 hover:border-double hover:border-sky-500 ">
                    <a href="/produk/{{$barangCard->idbarang}}">
                        <div class=" text-sm bg-gray-300">
                            <p>{{ $barangCard->jenis}}</>
                            </p>
                        </div>
                        <div class="flex justify-center py-2 items-center">
                            <img class="h-28 w-30 object-cover" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-indigo-600">
                                {{ $barangCard->id }}|<span class="text-black">{{Str::limit($barangCard->nama,50)
                                    }}</span></p>
                            </p>
                        </div>
                        <div>
                            <p class="py-2 mx-5 block indent-3">{{Str::limit($barangCard->deskripsi,150) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>