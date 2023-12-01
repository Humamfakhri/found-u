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
        Schema::create('akun', function (Blueprint $table) {
            $table->integer('id_akun', true);
            $table->string('username', 50);
            $table->string('nama_akun', 50);
            $table->string('password', 200);
            $table->string('no_telp', 15);
            $table->boolean('role');
            $table->text('foto_profil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun');
    }
};
