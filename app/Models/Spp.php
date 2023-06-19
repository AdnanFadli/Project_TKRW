<?php

namespace App\Models;

use App\Models\Santri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Spp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bukti_pembayaran',
        'bank_tujuan',
    ];
    public function Santri() : BelongsTo
    {
        return $this->belongsTo(Santri::class);
    }
}
