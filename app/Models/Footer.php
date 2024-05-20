<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'alamat'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'nama',
        'alamat',
        'identitas',
        'kontak',
        // Tambahkan kolom-kolom lain yang ingin Anda masukkan ke dalam fillable
    ];
}
