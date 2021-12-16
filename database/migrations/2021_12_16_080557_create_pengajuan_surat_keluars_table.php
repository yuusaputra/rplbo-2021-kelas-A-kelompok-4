<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('nama_pengetik');
            $table->string('konsep');
            $table->binary('file');
            $table->enum('penyerahan_kepada', ['Resepsionis', 'Staf Administrasi Umum', 'Kepala Tata Usaha', 'Kepala Sekolah'])->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('pengajuan_surat_keluars');
    }
}
