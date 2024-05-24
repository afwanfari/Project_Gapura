<div>
    <div>
        <!-- trainer-table.blade.php -->
        <div class="flex py-32 bg-gray-700">
            <p class="text-white hero">Product Trainer lengkap
            </p>
        </div>
        <div class="py-10 mx-10">
            <div class="table-container">
                <table class="w-full border-2 border-collapse table-auto" id="barangTable">
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
    </div>
</div>
