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
        Schema::create('siswas_tables', function (Blueprint $table) {
            $table->char('nisn', 10)->primary();
            $table->char('nis',8);
            $table->string('nama',35);
            $table->foreignId('id_kelas')->references('id_kelas')->references('id_kelas')->on('kelases_tables')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('alamat');
            $table->string('no_telp', 13);
            $table->foreignId('id_spp')->references('id_spp')->on('spps_tables')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas_tables');
    }
};
