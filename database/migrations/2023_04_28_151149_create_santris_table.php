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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nis');
            $table->string('nama');
            $table->enum('jenkel', ["Laki-Laki","Perempuan"]);
            $table->string('tpt_lahir');
            $table->string('tgl_lahir');
            $table->year('tahun_masuk');
            $table->string('nm_ortu');
            $table->enum('status',["Belum Lunas","Lunas"]);
            $table->string('jumlah_tagihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
