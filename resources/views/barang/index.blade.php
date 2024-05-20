<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div id="barangContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($barangs as $barang)
                        <div class="barangItem bg-gray-100 p-4 rounded-lg" data-jenis="{{ $barang->jenis_barang }}">
                            <h2 class="text-lg font-semibold">{{ $barang->nama }}</h2>
                            <br>
                            <div class="image-container">
                                <img src="{{ asset('/' . $barang->gambar) }}" alt="{{ $barang->nama }}"
                                    class="max-w-xs mb-2">
                            </div>
                            <br>
                            <p><b>{{ $barang->idbarang }}</b></p>
                            <br>
                            @php
                            $deskripsi = $barang->deskripsi;
                            $deskripsiLengkap = strlen($deskripsi) > 30 ? substr($deskripsi, 0, 30) . '...' :
                            $deskripsi;
                            @endphp
                            <p class="deskripsi">{{ $deskripsiLengkap }}</p>
                            @if (strlen($deskripsi) > 30)
                            <button onclick="showFullDescription('{{ $deskripsi }}')"
                                class="text-blue-500 hover:underline focus:outline-none">Selengkapnya</button>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $barangs->links() }}
        </div>
    </div>

    <style>
        .barangItem {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            /* Tambahkan margin atas */
        }

        .image-container {
            width: 40%;
            display: flex;
            justify-content: center;
        }

        .image-container img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        /* Pop-up styling */
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }
    </style>

    <!-- JavaScript untuk pop-up -->
    <script>
        function showFullDescription(deskripsi) {
            const popupContainer = document.querySelector('.popup-container');
            const popupContent = popupContainer.querySelector('.popup-content');

            popupContent.textContent = deskripsi;
            popupContainer.style.display = 'block';
        }

        function closePopup() {
            const popupContainer = document.querySelector('.popup-container');
            popupContainer.style.display = 'none';
        }
    </script>

    <!-- Pop-up Container -->
    <div class="popup-container">
        <div class="popup-content">
            <!-- Konten deskripsi pop-up -->
        </div>
        <button onclick="closePopup()" class="text-blue-500 hover:underline focus:outline-none mt-4">Tutup</button>
    </div>
</x-app-layout>