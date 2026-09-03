<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // Daftarkan kolom yang boleh diisi melalui form (Mass Assignment)
    protected $fillable = [
        'judul',
        'konten',
        'penulis',
        'gambar',
    ];
}