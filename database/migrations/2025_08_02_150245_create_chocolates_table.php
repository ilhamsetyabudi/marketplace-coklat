<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chocolates', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori'); // Akan kita buat jadi pilihan: batang, permen, serbuk
            $table->text('deskripsi');
            $table->integer('harga'); // Simpan harga dalam bentuk integer (misal: 50000)
            $table->string('gambar'); // Untuk menyimpan path/nama file gambar
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chocolates');
    }
};
