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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->integer('id_akun');
            $table->integer('id_postingan');
            $table->foreign('id_akun')->references('id_akun')->on('akun')->onDelete('cascade');
            $table->foreign('id_postingan')->references('id_postingan')->on('postingan')->onDelete('cascade');
            $table->primary(['id_akun', 'id_postingan']);
            $table->tinyInteger('status');
            $table->boolean('baca');
            $table->string('deskripsi_notifikasi', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};
