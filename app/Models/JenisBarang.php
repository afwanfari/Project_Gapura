<?php

namespace App\Models;


use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisBarang extends Model
{
    use HasFactory;

    protected $table = 'jenis_barangs'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'jenis',
        // Tambahkan kolom-kolom lain yang ingin Anda masukkan ke dalam fillable
    ];
}
