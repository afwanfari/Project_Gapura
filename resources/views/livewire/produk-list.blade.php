<div>
    <section
        class="grid mb-10 bg-gray-700 text-white text-center bg-cover z-10 relative bg-[url('https://live.staticflickr.com/65535/49909538937_3255dcf9e7_b.jpg')]">
        <div class="w-full h-full col-start-1 row-start-1 bg-gray-800 bg-opacity-40"></div>
        <div class="col-start-1 row-start-1 px-10 py-24">
            <h1 class="py-5 text-4xl font-bold leading-none tracking-tight underline underline-offset-8">PRODUK KAMI
            </h1>
        </div>
    </section>
    <section x-data="{ mobileSidebarOpen: true }" class="flex flex-row mx-auto mt-6 max-w-7xl">
        <mobileSidebarNav class="relative z-10 mx-auto mb-6 md:hidden flex-row">
            <a @click="mobileSidebarOpen = !mobileSidebarOpen"
                class="flex items-center p-3 font-bold rounded-lg cursor-pointer select-none hover:bg-gray-200">
                <span>Menu</span>
                <img x-bind:class="mobileSidebarOpen && 'rotate-180 duration-300'" class="w-4 ml-1.5"
                    src="https://img.icons8.com/small/32/000000/expand-arrow.png" />
            </a>
        </mobileSidebarNav>
        <!-- Sidebar for filtering -->
        <div x-show="mobileSidebarOpen" x-cloak x-transition:enter="duration-300 ease-out"
            x-transition:enter-start="opacity-0 -mt-96" x-transition:enter-end="opacity-100 mt-0"
            class="w-1/4 mt-10 border-gray-200">
            <ul class="px-4 space-y-4">
                @foreach ($jenisList as $jenis)
                <li>
                    <a href="#" wire:click.prevent="filterByJenis('{{ $jenis }}')"
                        class="flex items-center justify-start block gap-2 py-3 border-2 rounded-lg hover:bg-sky-600 hover:text-white">
                        <img class="w-6 h-6 mx-2 select-none" src="{{ asset('images/' . strtolower($jenis) . '.png') }}"
                            alt="{{ $jenis }}">
                        <span>{{ $jenis }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Main content for displaying products -->
        <div class="w-3/4 mx-2.5 mt-12 select-none">
            <div class="mb-4 flex justify-start items-center">
                <input type="text" wire:model.live="search" placeholder="Search for Anything..."
                    class="px-4 py-2 placeholder:italic border rounded-full h-16 w-1/3 fill-slate-300">
            </div>
            <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
                @foreach ($barangs as $barangCard)
                <div
                    class="flex flex-col space-x-3 overflow-hidden transition duration-150 ease-in-out border-2 rounded-lg shadow-lg shadow-sky-500/50 hover:border-double hover:border-sky-500">
                    <a href="{{ route('produk.detail', ['idbarang' => $barangCard->idbarang]) }}">
                        <div class="flex items-center justify-center py-2">
                            <img class="object-cover h-28 w-30" src="{{ asset('/' . $barangCard->gambar) }}"
                                alt="{{ $barangCard->nama }}">
                        </div>
                        <div class="items-center text-center">
                            <p class="text-sm text-indigo-600">
                                {{ $barangCard->idbarang }}|<span class="text-black">{{ Str::limit($barangCard->nama,
                                    50) }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="block py-2 mx-5 text-start text-slate-800 indent-3">
                                {{ Str::limit($barangCard->deskripsi, 150) }}
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="items-center justify-center mt-4">
                {{ $barangs->links('vendor.livewire.tailwind', ['forcePage' => $barangs->currentPage() + 1, 'scrollTo'
                => false]) }}
            </div>
        </div>
    </section>
</div>
