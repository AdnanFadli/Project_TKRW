<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasKeluar extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama_pengeluaran',
        'jumlah',
        'tanggal_keluar',
        'keterangan',
    ];
}
