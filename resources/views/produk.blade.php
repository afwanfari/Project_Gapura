<x-app-layout>
    @section('title')
    Produk | GAPURA
    @endsection
    @section('hero')
    <div class="flex py-32 bg-gray-700">
        <p class="mx-10 text-4xl text-white underline justify-items-start underline-offset-8">Produk Kami</p>
    </div>
    <main class="flex gap-4 py-10">
        <section class="w-1/6 mt-12">
            <ul class="space-y-4 px-4 justify-items-left ">
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\elektronika.png') }}" alt="elektronika">
                    <span>Elektronika</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\ALATBERAT.png') }}" alt="ALATBERAT">
                    <span>Alat Berat</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\energi.png') }}" alt="energi">
                    <span>Energi</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\kereta.png') }}" alt="kereta">
                    <span>Kereta</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\LABBAHASA.png') }}" alt="LABBAHASA">
                    <span>Lab Bahasa</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\LISTRIK.png') }}" alt="LISTRIK">
                    <span>Listrik</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\MEKATRONIKA.png') }}" alt="MEKATRONIKA">
                    <span>Mekatronika</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\OTOMOTIF.png') }}" alt="OTOMOTIF">
                    <span>Otomotif</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\OTOTRONIK.png') }}" alt="OTOTRONIK">
                    <span>Ototronik</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\PENDINGIN.png') }}" alt="PENDINGIN">
                    <span>Pendingin</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\PERKAPALAN.png') }}" alt="PERKAPALAN">
                    <span>Perkapalan</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\PESAWATUDARA.JPG') }}"
                        alt="PESAWATUDARA">
                    <span>Pesawat Udara</span>
                </x-li>
                <x-li>
                    <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images\UKM.JPG') }}" alt="UKM">
                    <span>UKM</span>
                </x-li>
            </ul>
        </section>
        <section class="w-5/6 mx-2.5">
            <div class="grid gap-8 mx-auto mt-12 select-none lg:grid-cols-3 ">
                @foreach($barang as $barangCard)
                <div class="card">
                    <a href="/produk/{{$barangCard->idbarang}}">
                        <div class="flex items-center justify-center py-2">
                            <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-sky-500">
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
            <div class="items-center justify-center py-5">
                <P>{{ $barang->links('vendor.pagination.simple-tailwind') }}</P>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>