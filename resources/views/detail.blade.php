<x-app-layout>
    @section('title', 'DETAIL PRODUK | GAPURA')
    @section('hero')
        <livewire:product-detail :idbarang="$product->idbarang" />
    @endsection
</x-app-layout>
