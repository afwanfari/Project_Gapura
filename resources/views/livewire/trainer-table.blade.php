<div>
    <!-- trainer-table.blade.php -->
    <div class="flex py-32 bg-gray-700">
        <p class="text-white py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">Product
            Trainer lengkap
        </p>
    </div>
    <div class="py-10 mx-10">
        <input wire:model.live="search">
        <table class="w-full border-2 border-collapse table-auto">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-2">No</th>
                    <th class="px-6 py-3 border-2 header-cell">Kode Produk</th>
                    <th class="px-6 py-3 border-2 header-cell">Jenis Produk</th>
                    <th class="px-6 py-3 border-2 header-cell">Nama Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainer as $key => $barang)
                <tr class="table-row">
                    <td class="px-6 py-4 border-2">{{ $key + 1 }}</td>
                    <td class="px-6 py-4 border-2">{{ $barang->idbarang }}</td>
                    <td class="px-6 py-4 border-2">{{ $barang->jenis_barang }}</td>
                    <td class="px-6 py-4 border-2">{{ $barang->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>