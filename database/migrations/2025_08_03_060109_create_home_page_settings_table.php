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
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('motto')->nullable();
            $table->string('gambar_sejarah')->nullable();
            $table->json('isi_keunggulan')->nullable(); // Untuk menyimpan list teks
            $table->string('gambar_keunggulan')->nullable();
            $table->json('varian')->nullable(); // Untuk menyimpan grup jenis, deskripsi, gambar
            $table->json('gallery_potrait')->nullable(); // Untuk menyimpan banyak foto
            $table->json('gallery_landscape')->nullable(); // Untuk menyimpan banyak foto
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
