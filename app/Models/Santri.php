<?php

namespace App\Models;

use App\Models\Spp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nis',
        'nama',
        'jenkel',
        'tpt_lahir',
        'tgl_lahir',
        'tahun_masuk',
        'nm_ortu',
        'status',
        'jumlah_tagihan',
    ];
    // public function fspp()
    // {
    //     return $this->hasOne(Spp::class);
    // }


}
