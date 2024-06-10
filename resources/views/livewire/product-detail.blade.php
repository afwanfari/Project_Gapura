<div>
    <x-app-layout>
        @section('title', 'PRODUCT DETAIL | GAPURA')
        @section('hero')
            <div class="flex justify-items-center mx-auto max-w-7xl">
                <div class="grid justify-items-center max-w-lg gap-8 mx-auto mt-12 lg:max-w-none">
                    <div class="flex flex-col space-x-3 overflow-hidden border-2 rounded-lg shadow-lg shadow-sky-500/50">
                        <div class="py-3 text-lg px-5 bg-gray-300">
                            <p>Detail Produk</p>
                        </div>
                        <div class="flex items-center justify-center py-2">
                            <img class="object-cover h-30 w-30" src="{{ asset('/' . $product->gambar) }}"
                                alt="{{ $product->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-indigo-600">
                                {{ $product->idbarang }} | <span class="text-black">{{ $product->nama }}</span>
                            </p>
                        </div>

                        <div class="px-5 py-5">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed w-3/10">
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">Deskripsi
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            @if ($product->jenis_barang !== 'Usaha Kecil Menengah (UKM)')
                                                {!! wordwrap($product->deskripsi, 150, '<br>', true) !!}
                                            @else
                                                @php
                                                    $deskripsiLines = explode("\n", $product->deskripsi); // Gunakan newline sebagai pemisah
                                                @endphp

                                                @foreach ($deskripsiLines as $line)
                                                    @if (trim($line) !== '')
                                                        {{-- Hanya tampilkan baris yang bukan spasi --}}
                                                        @php
                                                            $words = explode(' ', $line); // Pisahkan kata-kata dalam baris
                                                            $wordCount = count($words); // Hitung jumlah kata dalam baris
                                                        @endphp

                                                        @if ($wordCount > 20)
                                                            {{-- Jika jumlah kata melebihi 10, pisahkan menjadi beberapa baris --}}
                                                            @php
                                                                $chunks = array_chunk($words, 20); // Pisahkan menjadi chunk dengan 10 kata per chunk
                                                            @endphp

                                                            @foreach ($chunks as $chunk)
                                                                {{ implode(' ', $chunk) }}<br> {{-- Tampilkan chunk sebagai baris baru --}}
                                                            @endforeach
                                                        @else
                                                            {{-- Jika jumlah kata kurang dari atau sama dengan 10 --}}
                                                            @if (strpos($line, '•') !== 0)
                                                                {{-- Jika baris tidak diawali dengan tanda • --}}
                                                                <strong>{{ trim($line) }}</strong><br>
                                                                {{-- Tampilkan teks yang dicetak tebal --}}
                                                            @else
                                                                {{ trim($line) }}<br> {{-- Tampilkan baris dengan tanda • --}}
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endforeach

                                            @endif
                                        </td>
                                    </tr>


                                    @if ($product->jenis_barang !== 'Usaha Kecil Menengah (UKM)')
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">
                                                Dimensi
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $dimensiLines = explode('-', $product->dimensi);
                                                @endphp
                                                @foreach ($dimensiLines as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">Bahan
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $bahanLines = explode('-', $product->bahan);
                                                @endphp
                                                @foreach ($bahanLines as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">Warna
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $warnaLines = explode('-', $product->warna);
                                                @endphp
                                                @foreach ($warnaLines as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">Sumber
                                                Daya</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $sumberDayaLines = explode('-', $product->sumber_daya);
                                                @endphp
                                                @foreach ($sumberDayaLines as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">Data
                                                Teknis</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $dataTeknisLines = explode('-', $product->data_teknis);
                                                @endphp
                                                @foreach ($dataTeknisLines as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">
                                                Aksesoris
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $aksesorisLines = explode('-', $product->aksesoris);
                                                @endphp
                                                @foreach ($aksesorisLines as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">Harga
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                @php
                                                    $harga = explode('-', $product->harga);
                                                @endphp
                                                @foreach ($harga as $line)
                                                    {{ $line }}<br>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="px-5 py-5 text-center">
                                <a wire:navigate href="{{ route('produk') }}"
                                    class="inline-block px-6 py-2 text-sm font-semibold text-white bg-blue-500 rounded-full hover:bg-blue-600">
                                    Kembali ke Daftar Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </x-app-layout>
</div>
