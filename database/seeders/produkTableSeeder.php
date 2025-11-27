<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'Meja',
                'id_kategori' => 1,
                'qty' => 12,
                'harga_beli' => 50000,
                'harga_jual' => 540000,
            ],
            [
                'nama' => 'Kursi',
                'id_kategori' => 1,
                'qty' => 12,
                'harga_beli' => 40000,
                'harga_jual' => 450000,
            ]
        ]);
    }
}
