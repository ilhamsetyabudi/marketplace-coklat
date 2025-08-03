<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePageSetting extends Model
{
    use HasFactory;

    // Izinkan semua kolom untuk diisi
    protected $guarded = [];

    // Ubah tipe data kolom JSON menjadi array secara otomatis
    protected $casts = [
        'isi_keunggulan'    => 'array',
        'varian'              => 'array',
        'gallery_potrait'     => 'array',
        'gallery_landscape'   => 'array',
    ];
}
