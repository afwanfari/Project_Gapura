<div>
    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">TRAINER KAMI
            </h1>
        </div>
    </section>

    <div class="mb-4 flex justify-center items-center">
        <input type="text" wire:model.live="search" placeholder="Search for Anything..."
            class="px-4 py-2 placeholder:italic border rounded-lg h-16  w-1/4 fill-slate-300 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1">
    </div>

    <div class="flex items-center justify-center mx-5">
        <table id="trainerTable"
            class="min-w-full divide-y divide-gray-200 overflow-x-auto rounded-md border-1 border-collapse table-auto justify-items-center select-none">
            <thead class="bg-sky-300">
                <tr>
                    <th class="px-2 py-3 border-2">No</th>
                    <th class="px-6 py-3 border-2">Kode Produk</th>
                    <th class="px-6 py-3 border-2">Gambar</th>
                    <th class="px-6 py-3 border-2">Jenis Produk</th>
                    <th class="px-6 py-3 border-2">Nama Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $key => $barang)
                    <tr
                        class="table-row odd:bg-white even:bg-slate-100 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-100 hover:bg-sky-400 duration-200 cursor-pointer select-none">
                        <td class="px-2 py-4 border-2 ">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-2 font-bold"> <a
                                href="{{ route('produk.detail', ['idbarang' => $barang->idbarang]) }}">{{ $barang->idbarang }}</a>
                        </td>
                        <td class="px-6 py-4 border-2 font-bold"> <a
                                href="{{ route('produk.detail', ['idbarang' => $barang->idbarang]) }}"> <img
                                    class="object-cover h-11 w-11" src="{{ asset('/' . $barang->gambar) }}"
                                    alt="{{ $barang->nama }}"></a>
                        </td>
                        <td class="px-6 py-4 border-2"> <a
                                href="{{ route('produk.detail', ['idbarang' => $barang->idbarang]) }}">{{ $barang->jenis_barang }}</a>
                        </td>
                        <td class="px-6 py-4 border-2"> <a
                                href="{{ route('produk.detail', ['idbarang' => $barang->idbarang]) }}">{{ $barang->nama }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
