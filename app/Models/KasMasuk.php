<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama_pemasukan',
        'jumlah',
        'tanggal_masuk',
        'keterangan',
    ];
}
