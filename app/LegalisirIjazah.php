<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalisirIjazah extends Model
{
    protected $fillable = [
        'nis', 'nama_lengkap', 'ttl', 'tahun_alumni', 'tanggal_kunjungan', 'file', 'penyerahan_kepada', 'catatan'
    ];
}
