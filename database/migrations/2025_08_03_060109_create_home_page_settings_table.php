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
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();

            // Bagian Header
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();

            // Bagian Tentang & Keunggulan
            $table->text('sejarah')->nullable();
            $table->string('motto')->nullable();
            $table->string('gambar_sejarah')->nullable();
            $table->json('isi_keunggulan')->nullable(); // Menyimpan list teks
            $table->string('gambar_keunggulan')->nullable();

            // Bagian Varian (Repeater)
            $table->json('varian')->nullable(); // Menyimpan grup jenis, deskripsi, gambar

            // Bagian Gallery
            $table->json('gallery_potrait')->nullable(); // Menyimpan banyak foto
            $table->json('gallery_landscape')->nullable(); // Menyimpan banyak foto

            // Bagian Kontak
            $table->string('username_ig')->nullable();
            $table->string('nomor_wa')->nullable();
            $table->string('gmail')->nullable();
            $table->text('link_maps')->nullable(); // Untuk kode embed yang panjang

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_settings');
    }
};
