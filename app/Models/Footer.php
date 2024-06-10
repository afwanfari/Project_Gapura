<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'alamat';

    protected $fillable = [
        'nama',
        'alamat',
        'identitas',
        'kontak',
    ];
}
