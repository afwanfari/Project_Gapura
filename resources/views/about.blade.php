<x-app-layout>
    @section('title')
    ABOUT | GAPURA
    @endsection
    @section('hero')
    <div class="py-32 flex bg-gray-700">
        <p class="text-4xl mx-10 justify-items-start underline text-white underline-offset-8">Tentang Kami</p>
    </div>
    <div class=" mx-auto">
        <div class="py-48 px-20 pt-30 text-center bg-center"
            style=" background-image: url('/images/bg.jpg'); background-size: cover;">
            <div
                class="text-left uppercase tracking-wide text-2xl text-black font-semibold underline underline-offset-8">
                Tentang Kami</div>
            <p class=" text-black text-left">Kami praktisi peduli pendidikan yang mengabdikan diri sebagai inovator<br>
                media pembelajaran dan transfer IPTEK dalam negeri dengan menciptakan <br> alat peraga / alat praktek /
                Teaching Aid / trainer berbasis IPTEK sebagai <br> sumbangsih kami pada negara Indonesia.</p>
        </div>

        <div class="grid grid-cols-2 lg:text-center">
            <div>
                <div class="bg-gray-800 overflow-hidden shadow-xl ">
                    <div class="p-6 h-48">
                        <h2 class="text-xl font-semibold text-yellow-400">VISI</h2>
                        <p class="mt-2 text-white">Mencerdaskan bangsa melalui produksi fasilitas pendidikan berupa
                            Trainer/Teaching Aid.</p>

                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden shadow-xl ">
                    <img class="w-full h-48 object-cover object-center" src="\berita\Perbaikan.jpg" alt="Card image">
                </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden shadow-xl ">
                    <img class="w-30 h-30 object-cover object-center" src="\berita\Perbaikan.jpg" alt="Card image">

                </div>
            </div>
            <div>
                <div class="bg-gray-800 overflow-hidden shadow-xl ">
                    <div class="p-6 h-48">
                        <h2 class="text-xl font-semibold text-yellow-400">MISI</h2>
                        <p class="mt-2 text-white">Mencerdaskan bangsa melalui Pelatihan/Training</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</x-app-layout>