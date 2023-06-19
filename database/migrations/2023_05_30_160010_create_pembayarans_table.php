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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->enum('tahap_pem',["Tahap 1","Tahap 2","Tahap 3","Tahap 4","Tahap 5","Tahap 6","Tahap 7","Tahap 8"]);
            $table->string('bukPembayaran');
            $table->string('tujuanTF');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};