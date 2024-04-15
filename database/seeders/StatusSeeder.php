<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            [
                'status' => 1,
                'keterangan' => "Diajukan",
            ],
            [
                'status' => 2,
                'keterangan' => "Dipublikasi",
            ],
            [
                'status' => 3,
                'keterangan' => "Ditolak",
            ],
            [
                'status' => 4,
                'keterangan' => "Dibatalkan",
            ],
            [
                'status' => 5,
                'keterangan' => "Ditemukan",
            ],
            [
                'status' => 6,
                'keterangan' => "Diambil",
            ],
        ]);
    }
}
