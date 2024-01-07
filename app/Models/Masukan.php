<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Masukan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_masukan';
    protected $fillable = [
        'id_akun',
        'pesan',
        'jawaban',
        'baca',
        'faq',
    ];

    public function akun() : BelongsTo
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }
}
