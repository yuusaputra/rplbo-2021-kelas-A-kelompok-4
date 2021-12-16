<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalisirIjazahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalisir_ijazahs', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama_lengkap');
            $table->date('ttl');
            $table->integer('tahun_alumni');
            $table->date('tanggal_kunjungan');
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
        Schema::dropIfExists('legalisir_ijazahs');
    }
}
