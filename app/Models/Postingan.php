<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postingan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_postingan';
    // protected $dates = [
    //     'tgl_kehilangan',
    //     'tgl_ditemukan',
    //     'tgl_publikasi',
    //     'created_at',
    //     'updated_at'
    // ];
    protected $fillable = [
        'id_akun',
        'status',
        'judul_postingan',
        'deskripsi_postingan',
        'image',
        'lokasi_kehilangan',
        'lokasi_ditemukan',
        'lokasi_disimpan',
        'tgl_kehilangan',
        'tgl_ditemukan',
        'tgl_publikasi',
        'no_telp'
    ];

    public function akun() : BelongsTo
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }

    public function status() : BelongsTo
    {
        return $this->belongsTo(Status::class, 'status');
    }

    public function getImageURL() {
        if ($this->image) {
            return url('storage/'. $this->image);
        }
        return url('storage/foto-barang/no-image.jpg');
    }
}
