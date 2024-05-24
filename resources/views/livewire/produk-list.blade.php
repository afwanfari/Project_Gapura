<div>
    <div>
        <div class="flex px-5 py-32 bg-gray-700">
            <p class="text-white py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8 ">
                Product</p>
        </div>
        <div class="flex">
            <!-- Sidebar for filtering -->
            <div class="w-1/4 mt-10 border-gray-200">
                <ul class="px-4 space-y-4">
                    @foreach ($jenisList as $jenis)
                        <li>
                            <a href="#" wire:click.prevent="filterByJenis('{{ $jenis }}')"
                                class="flex items-center justify-start block gap-2 py-3 border-2 rounded-lg hover:bg-orange-500 hover:text-white">
                                <img class="w-6 h-6 mx-2 select-none"
                                    src="{{ asset('images/' . strtolower($jenis) . '.png') }}" alt="{{ $jenis }}">
                                <span>{{ $jenis }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Main content for displaying products -->
            <div class="grid w-3/4 gap-8 mx-2.5 mt-12 select-none lg:grid-cols-3 md:grid-cols-2">
                @foreach ($barangs as $barangCard)
                    <div class="card">
                        <a href="/produk/{{ $barangCard->idbarang }}">
                            <div class="flex items-center justify-center py-2">
                                <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                    alt="{{ $barangCard->nama }}">
                            </div>
                            <div class="items-center text-center">
                                <p class="text-sm text-indigo-600">
                                    {{ $barangCard->idbarang }}|<span
                                        class="text-black">{{ Str::limit($barangCard->nama, 50) }}</span>
                                </p>
                            </div>
                            <div>
                                <p class="block py-2 mx-5 text-start text-slate-800 indent-3">
                                    {{ Str::limit($barangCard->deskripsi, 150) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="items-center justify-center mt-4">
            {{ $barangs->links('vendor.livewire.tailwind', ['forcePage' => $barangs->currentPage() + 1]) }}
        </div>
    </div>
</div>
