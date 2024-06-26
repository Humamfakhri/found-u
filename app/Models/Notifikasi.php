<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notifikasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_notifikasi';
    protected $fillable = [
        'id_akun',
        'id_postingan',
        'status',
        'baca',
    ];

    public function akun() : BelongsTo
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }

    public function postingan() : BelongsTo
    {
        return $this->belongsTo(Postingan::class, 'id_postingan');
    }
}
