<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Barang;

class ProdukList extends Component
{
    use WithPagination;
    use WithoutUrlPagination;

    protected $queryString = ['page'];
    public $selectedJenis = '';
    public $jenisList = [];
    public $page = 1;


    public function mount()
    {
        $this->jenisList = Barang::distinct()->pluck('jenis_barang');
    }

    public function filterByJenis($jenis)
    {
        $this->selectedJenis = $jenis;
        $this->resetPage(); // Reset halaman pagination
    }

    public function render()
    {
        $barangs = Barang::query()
            ->when($this->selectedJenis, function ($query) {
                $query->where('jenis_barang', $this->selectedJenis);
            })
            ->paginate(12, ['*'], 'page', $this->page); // Masukkan halaman saat ini

        return view('livewire.produk-list', [
            'barangs' => $barangs,
            'jenisList' => $this->jenisList,
        ]);
    }
    public function gotoPage($page)
    {
        $this->page = $page; // Sesuaikan dengan properti halaman yang Anda gunakan
    }
    public function showDetail($id)
    {
        $barangDetail = Barang::find($id);

        // Kirim data detail barang ke komponen detail
        $this->emit('barangDetailFetched', $barangDetail);
    }
}
