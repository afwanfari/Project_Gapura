<div>
    <div>
        <div class="flex py-32 bg-gray-700">
            <p class="mx-10 text-4xl text-white underline justify-items-start underline-offset-8">PRODUCT LIST</p>
        </div>
        <div class="flex">
            <!-- Sidebar for filtering -->
            <div class="w-1/4 p-4 border-r border-gray-200">
                <ul>
                    @foreach ($jenisList as $jenis)
                    <li>
                        <a href="#" wire:click.prevent="filterByJenis('{{ $jenis }}')"
                            class="flex items-center justify-start block gap-2 py-3 border-2 rounded-lg hover:bg-orange-500">
                            <img class="w-6 h-6 mx-2 select-none"
                                src="{{ asset('images/' . strtolower($jenis) . '.png') }}" alt="{{ $jenis }}">
                            <span>{{ $jenis }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Main content for displaying products -->
            <div class="grid w-3/4 gap-8 mx-auto mt-12 select-none lg:grid-cols-3">
                @foreach ($barangs as $barangCard)
                <div
                    class="flex flex-col space-x-3 overflow-hidden border-2 rounded-lg shadow-lg hover:border-double hover:border-sky-500">
                    <a href="/produk/{{ $barangCard->idbarang }}">
                        <div class="flex items-center justify-center py-2">
                            <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-indigo-600">
                                {{ $barangCard->idbarang }}|<span class="text-black">{{ Str::limit($barangCard->nama,
                                    50) }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="block py-2 mx-5 indent-3">{{ Str::limit($barangCard->deskripsi, 150) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="items-center justify-center mt-4">
            {{ $barangs->links('vendor.pagination.simple-tailwind', ['forcePage' => $barangs->currentPage() + 1]) }}
        </div>
    </div>
</div>