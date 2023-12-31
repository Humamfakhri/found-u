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
        Schema::create('masukans', function (Blueprint $table) {
            $table->integer('id_masukan', true);
            $table->integer('id_akun')->default(1);
            $table->foreign('id_akun')->references('id_akun')->on('akuns')->onDelete('cascade');
            $table->text('pesan');
            $table->text('jawaban')->nullable();
            $table->boolean('baca')->default(0);
            $table->boolean('faq')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masukans');
    }
};
