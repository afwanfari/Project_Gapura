<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id'; // Ganti 'id' dengan nama kolom kunci primer yang benar

    protected $fillable = ['id','nama', 'gambar', 'deskripsi'];

    public function getData()
    {
        $result = self::inRandomOrder()->get();

        return $result;
    }
}
