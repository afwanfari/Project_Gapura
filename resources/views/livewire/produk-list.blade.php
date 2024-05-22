<div>
    <div class="flex">
        <!-- Sidebar for filtering -->
        <div class="w-1/4 p-4 border-r border-gray-200">
            <ul>
                @foreach($jenisList as $jenis)
                <li>
                    <a href="#"
                        wire:click.prevent="filterByJenis('{{ $jenis }}')"
                        class="flex items-center justify-start border-2 block hover:bg-orange-500 rounded-lg py-3 gap-2">
                        <img class="w-6 h-6 select-none mx-2" src="{{ asset('images/' . strtolower($jenis) . '.png') }}" alt="{{ $jenis }}">
                        <span>{{ $jenis }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    
        <!-- Main content for displaying products -->
        <div class="w-3/4 mx-auto mt-12 grid gap-8 lg:grid-cols-3 select-none">
            @foreach($barangs as $barangCard)
            <div class="flex flex-col overflow-hidden space-x-3 rounded-lg shadow-lg border-2 hover:border-double hover:border-sky-500">
                <a href="/produk/{{$barangCard->idbarang}}">
                    <div class="flex justify-center py-2 items-center">
                        <img class="h-28 w-30 object-cover" src="{{ asset('/' . $barangCard->gambar) }}" alt="{{ $barangCard->nama }}">
                    </div>
                    <div class="items-center text-center">
                        <p class="text-sm text-indigo-600">
                            {{ $barangCard->idbarang }}|<span class="text-black">{{Str::limit($barangCard->nama, 50) }}</span>
                        </p>
                    </div>
                    <div>
                        <p class="py-2 mx-5 block indent-3">{{Str::limit($barangCard->deskripsi, 150) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="justify-center items-center mt-4">
        {{ $barangs->links('vendor.pagination.simple-tailwind', ['forcePage' => $barangs->currentPage() + 1]) }}
    </div>
    
</div>
