<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs'; // Sesuaikan dengan nama tabel di database
    protected $fillable = [
        'nama',
        'jenis_barang',
        'idbarang',
        'gambar',
        'deskripsi',
    ];


    public function jenisBarang()
    {
        return $this->belongsTo(jenisBarang::class, 'jenis_barang', 'id');
    }

    public function getData()
    {
        $categories = $this->select('jenis_barang')->distinct()->pluck('jenis_barang');
        $result = collect();

        foreach ($categories as $category) {
            $result->push($this->with('JenisBarang')->where('jenis_barang', $category)->inRandomOrder()->firstOrFail());
        }
        return $result;
    }
}
