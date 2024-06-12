<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $primaryKey = 'idberita';
    public $timestamps = false;
    protected $table = 'berita';

    protected $fillable = ['idberita', 'judul', 'gambar', 'waktu', 'orang'];
}
