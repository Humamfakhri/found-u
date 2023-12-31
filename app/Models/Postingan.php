<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postingan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_postingan';
    protected $fillable = [
        'status',
        'judul_postingan',
        'deskripsi_postingan',
        'foto_barang',
        'lokasi_kehilangan',
        'lokasi_ditemukan',
        'tgl_pengajuan',
        'tgl_publikasi',
        'no_telp'
    ];

    public function akun() : BelongsTo
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }
}
