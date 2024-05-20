<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $primaryKey = 'idberita';

    protected $fillable = [
        'idberita',
        'judul',
        'gambar',
        // tambahkan kolom-kolom lain yang Anda butuhkan di sini
    ];
}
