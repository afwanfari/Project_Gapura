<x-app-layout>
    @section('title')
    Produk | GAPURA
    @endsection
    @section('hero')
    <div class="py-32 flex bg-gray-700">
        <p class="text-4xl mx-10 justify-items-start underline text-white underline-offset-8">Produk Kami</p>
    </div>
    <main class="flex py-10 gap-4">
        <section class="w-1/6 mt-12">
            <ul class="gap-8 mx-2 justify-items-left">
                <li> <a href=""
                        class="flex items-center justify-start border-2 block hover:bg-orange-500 rounded-lg py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\elektronika.png') }}"
                            alt="elektronika">
                        <span>Elektronika</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\ALATBERAT.png') }}" alt="ALATBERAT">
                        <span>Alat Berat</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\energi.png') }}" alt="energi">
                        <span>Energi</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\kereta.png') }}" alt="kereta">
                        <span>Kereta</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\LABBAHASA.png') }}" alt="LABBAHASA">
                        <span>Lab Bahasa</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\LISTRIK.png') }}" alt="LISTRIK">
                        <span>Listrik</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\MEKATRONIKA.png') }}"
                            alt="MEKATRONIKA">
                        <span>Mekatronika</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\OTOMOTIF.png') }}" alt="OTOMOTIF">
                        <span>Otomotif</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\OTOTRONIK.png') }}" alt="OTOTRONIK">
                        <span>Ototronik</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\PENDINGIN.png') }}" alt="PENDINGIN">
                        <span>Pendingin</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\PERKAPALAN.png') }}"
                            alt="PERKAPALAN">
                        <span>Perkapalan</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\PESAWATUDARA.JPG') }}"
                            alt="PESAWATUDARA">
                        <span>Pesawat Udara</span>
                    </a>
                </li>
                <li> <a href=""
                        class="flex items-center justify-start border-2 hover:bg-orange-500 rounded-lg block py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images\UKM.JPG') }}" alt="UKM">
                        <span>UKM</span>
                    </a>
                </li>

            </ul>
        </section>
        <section class="w-5/6">
            <div class="mx-auto mt-12 grid gap-8 lg:grid-cols-3 select-none  ">
                @foreach($barang as $barangCard)
                <div
                    class="flex flex-col overflow-hidden space-x-3 rounded-lg shadow-lg border-2 hover:border-double hover:border-sky-500 ">
                    <a href="/produk/{{$barangCard->idbarang}}">
                        <div class="flex justify-center py-2 items-center">
                            <img class="h-28 w-30 object-cover" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-indigo-600">
                                {{ $barangCard->idbarang }}|<span class="text-black">{{Str::limit($barangCard->nama,50)
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
            <div class="justify-center items-center">
                <P>{{ $barang->links('vendor.pagination.simple-tailwind') }}</P>
            </div>
        </section>
    </main>
    @endsection
</x-app-layout>