<!-- app.blade.php atau layout utama Anda -->
<x-app-layout>
    @section('title', 'DAFTAR PRODUK | GAPURA')
    @section('hero')
        @livewire('trainer-table')
    @endsection
</x-app-layout>
