<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun')->insert([
            [
                'username' => 'humam',
                'nama_akun' => 'Humam Ibadillah Fakhri',
                'password' => bcrypt('12345678'),
                'no_telp' => '0812345678',
                'role' => 1,
            ],
            [
                'username' => 'rigel',
                'nama_akun' => 'Rigel Rafiq Setiawan',
                'password' => bcrypt('12345678'),
                'no_telp' => '08198765432',
                'role' => 0,
            ]
        ]);
    }
}
