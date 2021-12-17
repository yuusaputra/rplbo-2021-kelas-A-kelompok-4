<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanSuratMasuk extends Model
{
    protected $fillable = [
        'nama_pengirim', 'instansi', 'jabatan', 'tanggal_kunjungan', 'isi_ringkasan_surat', 'file', 'penyerahan_kepada', 'catatan'
    ];
}
