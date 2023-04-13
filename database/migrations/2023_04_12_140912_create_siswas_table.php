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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->int('nilai_mata_pelajaran');
            $table->int('nilai_latihan1');
            $table->int('nilai_latihan2');
            $table->int('nilai_latihan3');
            $table->int('nilai_latihan4');
            $table->int('nilai_harian');
            $table->int('nilai_UTS');
            $table->int('nilai_UAS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
