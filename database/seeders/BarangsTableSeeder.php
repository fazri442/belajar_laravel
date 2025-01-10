<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' => 'kulkas', 'merk' => 'Sonic', 'harga' => '1000000'],
            ['nama_barang' => 'laptop', 'merk' => 'Thinkpad', 'harga' => '4000000'],
            ['nama_barang' => 'handphone', 'merk' => 'oppo', 'harga' => '1200000'],
            ['nama_barang' => 'pulpen', 'merk' => 'Joyko', 'harga' => '3000'],
            ['nama_barang' => 'botol', 'merk' => 'My Bottle', 'harga' => '10000'],
        ];
        DB::table('barangs')->insert($barangs);
    }
}
