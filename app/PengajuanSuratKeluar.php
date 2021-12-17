<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanSuratKeluar extends Model
{
    protected $fillable = [
        'nip', 'nama_pengetik', 'konsep', 'file', 'penyerahan_kepada', 'catatan'
    ];
}
