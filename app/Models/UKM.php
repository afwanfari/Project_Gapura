<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'barang'; // Sesuaikan dengan nama tabel di database
    protected $fillable = [
        'nama',
        'jenis_barang',
        'idbarang',
        'gambar',
        'deskripsi',

    ];

    public function getData()
    {
        $categories = $this->select('jenis_barang')->distinct()->pluck('jenis_barang');
        $result = collect();

        foreach ($categories as $category) {
            $result->push($this->where('jenis_barang', $category)->inRandomOrder()->firstOrFail());
        }

        return $result;
    }
}
