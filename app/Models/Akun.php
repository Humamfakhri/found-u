<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Akun extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
    protected $table = 'akun';

    protected $fillable = [
        'username',
        'nama_akun',
        'password',
        'no_telp',
        'role',
        'foto_profil'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

}
