<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akuns')->insert([
            [
                'username' => 'admin',
                'nama_akun' => 'Administrator',
                'nomor_induk' => null,
                'password' => bcrypt('12345678'),
                'no_telp' => '0812345678',
                'role' => 1,
                'image' => null,
            ],
            [
                'username' => 'pengguna',
                'nama_akun' => 'Pengguna',
                'nomor_induk' => null,
                'password' => bcrypt('12345678'),
                'no_telp' => '0812345678',
                'role' => 0,
                'image' => null,
            ],
            [
                'username' => 'humam',
                'nama_akun' => 'Humam Ibadillah Fakhri',
                'nomor_induk' => '6706223118',
                'password' => bcrypt('12345678'),
                'no_telp' => '0812345678',
                'role' => 0,
                'image' => 'foto-profil/humam.png',
            ],
            [
                'username' => 'luthfi',
                'nama_akun' => 'Luthfi Revansyah Pratama',
                'nomor_induk' => '6706220112',
                'password' => bcrypt('12345678'),
                'no_telp' => '08198765432',
                'role' => 0,
                'image' => 'foto-profil/luthfi.jpg',
            ],
            [
                'username' => 'rigel',
                'nama_akun' => 'Rigel Rafiq Setiawan',
                'nomor_induk' => '6706220112',
                'password' => bcrypt('12345678'),
                'no_telp' => '08198765432',
                'role' => 0,
                'image' => 'foto-profil/rigel.jpg',
            ]
        ]);
    }
}
