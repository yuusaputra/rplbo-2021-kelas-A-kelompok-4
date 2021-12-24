<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $fillable = [
        'nomor_surat', 'tanggal_surat', 'sifat_surat', 'perihal', 'file', 'penyerahan_kepada', 'catatan'
    ];
}
