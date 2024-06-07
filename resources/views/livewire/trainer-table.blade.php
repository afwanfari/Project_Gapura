<div>
    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">TRAINER KAMI
            </h1>
        </div>
    </section>

    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Cari...." class="px-4 py-2 border rounded">
    </div>

    <div>
        <table id="trainerTable" class="w-full border-2 border-collapse table-auto">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-2">No</th>
                    <th class="px-6 py-3 border-2">Kode Produk</th>
                    <th class="px-6 py-3 border-2">Jenis Produk</th>
                    <th class="px-6 py-3 border-2">Nama Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $key => $barang)
                    <tr class="table-row">
                        <td class="px-6 py-4 border-2">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-2"><a
                                href="{{ route('product.detail', $barang->idbarang) }}">{{ $barang->idbarang }}</a></td>
                        <td class="px-6 py-4 border-2"><a
                                href="{{ route('product.detail', $barang->idbarang) }}">{{ $barang->jenis_barang }}</a>
                        </td>
                        <td class="px-6 py-4 border-2"><a
                                href="{{ route('product.detail', $barang->idbarang) }}">{{ $barang->nama }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
