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
            // $table->id();
            $table->integer('id',11);
            $table->integer('nis',11);
            $table->string('nama',50);
            $table->enum('jenkel',['Laki-Laki','Perempuan']);
            $table->string('tpt_lahir',50);
            $table->string('tgl_lahir',50);
            $table->string('nm_ortu',50);
            $table->primary('id');
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