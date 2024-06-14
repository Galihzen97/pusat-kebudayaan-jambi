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
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->unsignedBigInteger('kategori_id');
            $table->string('penulis');
            $table->longText('konten');
            $table->enum('status', ['ajukan', 'aktif', 'tidak_aktif']);
            $table->string('gambar');
            $table->date('tgl_buat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
