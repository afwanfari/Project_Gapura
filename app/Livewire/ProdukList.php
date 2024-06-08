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

    public $selectedJenis = '';
    public $jenisList = [];
    public $search = '';

    protected $queryString = ['search', 'selectedJenis', 'page'];

    public function mount()
    {
        $this->jenisList = Barang::distinct()->pluck('jenis_barang');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function filterByJenis($jenis)
    {
        $this->selectedJenis = $jenis;
        $this->resetPage();
    }

    public function render()
    {
        $query = Barang::query();
    
        // Proses filter jenis_barang
        if ($this->selectedJenis) {
            $query->where('jenis_barang', $this->selectedJenis);
        }
    
        // Proses pencarian
        if ($this->search) {
            $query->where(function ($query) {
                $query->where('nama', 'like', '%' . $this->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $this->search . '%')
                    ->orWhere('jenis_barang', 'like', '%' . $this->search . '%');
            });
        }
    
        $barangs = $query->paginate(12);
    
        return view('livewire.produk-list', [
            'barangs' => $barangs,
            'jenisList' => $this->jenisList,
        ]);
    }

    public function showDetail($id)
    {
        $barangDetail = Barang::find($id);
        $this->emit('barangDetailFetched', $barangDetail);
    }
}
