<!-- app.blade.php atau layout utama Anda -->
<x-app-layout>
    @section('title', 'TRAINER | GAPURA')
    @section('hero')
        @livewire('trainer-table')
    @endsection
</x-app-layout>
