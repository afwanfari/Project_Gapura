<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';
    public $timestamps = false;
    protected $primaryKey = 'idkatalog';

    protected $fillable = ['idkatalog', 'nama', 'deskripsi', 'file_path'];
}
