<x-app-layout>
    @section('title')
    TRAINER | GAPURA
    @endsection
    @section('hero')
    <div class="py-32 flex bg-gray-700">
        <p class="text-4xl mx-10 justify-items-start underline text-white underline-offset-8">Produk Trainer Lengkap
        </p>
    </div>
    <div class="mx-10 py-10">
        <div class="table-container">
            <table class="w-full table-auto border-collapse border-2" id="barangTable">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-2">No</th>
                        <th class="px-6 py-3 border-2 header-cell">Kode Produk</th>
                        <th class="px-6 py-3 border-2 header-cell">Jenis Produk</th>
                        <th class="px-6 py-3 border-2 header-cell">Nama Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainer as $key => $barang)
                    <tr class="table-row">
                        <td class="px-6 border-2 py-4">{{ $key + 1 }}</td>
                        <td class="px-6 border-2 py-4">{{ $barang->idbarang }}</td>
                        <td class="px-6 border-2 py-4">{{ $barang->id }}</td>
                        <td class="px-6 border-2 py-4">{{ $barang->nama }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</x-app-layout>