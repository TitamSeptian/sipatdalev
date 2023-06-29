<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_no_dinas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('no_surat');
            $table->text('kepada');
            $table->text('dari');
            $table->string('tanggal');
            $table->enum('sifat', ['Biasa', 'Penting', 'Sangat Penting', 'Rahasia']);
            $table->string('perihal');

            $table->text('kalimat_pembuka');
            $table->text('hari_tanggal');
            $table->string('waktu_awal');
            $table->string('waktu_akhir');
            $table->text('tempat');
            $table->text('agenda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_no_dinas');
    }
};
