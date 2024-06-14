<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'judul',
        'slug',
        'kategori_id',
        'penulis',
        'konten',
        'status',
        'gambar',
        'tgl_buat',
        'created_at',
        'updated_at',
    ];

    protected $table = 'artikel';

    function kategori() {
        return $this->belongsTo(MdKategori::class, 'kategori_id');
    }



}
