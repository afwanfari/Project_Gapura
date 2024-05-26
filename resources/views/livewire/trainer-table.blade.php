<div>
    <!-- trainer-table.blade.php -->

    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">TRAINER KAMI
            </h1>
    </section>
    </hero>
    <div>
        <input type="text" id="searchInput" wire:model.debounce.300ms="search"
            class="w-full border rounded-md px-3 py-2" placeholder="Cari Produk...">
        <table class="w-full border-2 border-collapse table-auto">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-2 hover:bg-gray-200 cursor-pointer" wire:click="sortBy('idbarang')">No
                    </th>
                    <th class="px-6 py-3 border-2 header-cell hover:bg-gray-200 cursor-pointer"
                        wire:click="sortBy('idbarang')">Kode Produk</th>
                    <th class="px-6 py-3 border-2 header-cell hover:bg-gray-200 cursor-pointer"
                        wire:click="sortBy('jenis_barang')">Jenis Produk</th>
                    <th class="px-6 py-3 border-2 header-cell hover:bg-gray-200 cursor-pointer"
                        wire:click="sortBy('nama')">Nama Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $key => $barang)
                <tr class="table-row">
                    <td class="px-6 py-4 border-2">{{ $key + 1 }}</td>
                    <td class="px-6 py-4 border-2">{{ $barang->idbarang }}</td>
                    <td class="px-6 py-4 border-2">{{ $barang->jenis_barang }}</td>
                    <td class="px-6 py-4 border-2">{{ $barang->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $trainers->links('vendor.livewire.tailwind', ['forcePage' => $trainers->currentPage() + 1, 'scrollTo' =>
            false]) }}
        </div>
    </div>

</div>