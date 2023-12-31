<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Akun extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_akun';
    protected $fillable = [
        'username',
        'nama_akun',
        'password',
        'no_telp',
        'role',
        'foto_profil'
    ];

    public function postingans() : HasMany 
    {
        return $this->hasMany(Postingan::class);
    }

    public function masukan() : HasMany 
    {
        return $this->hasMany(Masukan::class, 'id_akun');
    }
}
