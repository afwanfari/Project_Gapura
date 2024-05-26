<x-app-layout>
    @section('title', 'PRODUCT LIST | GAPURA')
    @section('hero')

        <div class="flex justify-items-center mx-auto max-w-7xl">
            <div class="grid justify-items-center max-w-lg gap-8 mx-auto mt-12 select-none lg:max-w-none ">
                <div class="flex flex-col space-x-3 overflow-hidden  border-2 rounded-lg shadow-lg shadow-sky-500/50 ">
                    <div class="py-3 text-lg px-5 bg-gray-300 ">
                        <p>Detail Produk</>
                        </p>
                    </div>
                    <div class="flex items-center justify-center py-2">
                        <img class="object-cover h-30 w-30" src="{{ asset('/' . $product->gambar) }}"
                            alt="{{ $product->nama }}">
                    </div>
                    <div class="items-center text-center">
                        <p class="text-sm text-indigo-600">
                            {{ $product->idbarang }}|<span class="text-black">{{ $product->nama }}</span></p>
                        </p>
                    </div>
                    <ul class="px-5 space-y-4 pt-5 list-disc list-outside">
                        <li>
                            <p class="text-sm text-gray-600">
                                Deskripsi :{{ $product->deskripsi }}</p>
                        </li>
                        <li>
                            <p class="text-sm text-gray-600">
                                Komponen : {{ $product->komponen_terpasang }}</p>
                            </p>
                        <li>
                            <p class="text-sm text-gray-600">
                                Dimensi :{{ $product->dimensi }}</p>
                            </p>
                        </li>

                        </li>
                        <li>
                            <p class="text-sm text-gray-600">
                                Bahan :{{ $product->bahan }}</p>
                            </p>
                        </li>
                        <li>
                            <p class="text-sm text-gray-600">
                                Warna :{{ $product->warna }}</p>
                            </p>
                        </li>
                        <li>
                            <p class="text-sm text-gray-600">
                                Sumber Daya :{{ $product->sumber_daya }}</p>
                            </p>
                        </li>
                        <li>
                            <p class="text-sm text-gray-600">
                                Data Teknis :{{ $product->data_teknis }}</p>
                            </p>
                        </li>
                        <li>
                            <p class="text-sm text-gray-600">
                                Aksesoris :{{ $product->aksesoris }}</p>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
