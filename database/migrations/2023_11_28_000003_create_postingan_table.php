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
        Schema::create('postingan', function (Blueprint $table) {
            $table->integer('id_postingan', true);
            $table->integer('id_akun');
            $table->foreign('id_akun')->references('id_akun')->on('akun')->onDelete('cascade');
            $table->tinyInteger('status');
            $table->string('judul_postingan', 50);
            $table->text('deskripsi_postingan')->nullable();
            $table->text('foto_barang')->nullable();
            $table->string('lokasi_kehilangan', 50)->nullable();
            $table->string('lokasi_ditemukan', 50);
            $table->dateTime('tgl_pengajuan');
            $table->dateTime('tgl_publikasi');
            $table->string('no_telp', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingan');
    }
};
