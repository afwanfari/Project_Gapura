<?php

namespace App\Console\Commands;

use App\Models\Barang;


use Illuminate\Console\Command;

class GambarBarangCommand extends Command
{
    protected $signature = 'gambar:barang';

    protected $description = 'Contoh command untuk mengambil gambar barang dari database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
{
    $barangs = Barang::all();

    foreach ($barangs as $barang) {
        // Lakukan sesuatu dengan gambar barang, misalnya menyimpannya ke direktori tertentu
        $this->info('Gambar ' . $barang->nama . ' berhasil diambil.');
    }

    $this->info('Semua gambar barang berhasil diambil.');
}

}
