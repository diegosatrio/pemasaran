<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(
            [
                'nama_produk' => 'Laptop Gaming',
                'deskripsi' => 'Laptop gaming dengan performa tinggi untuk pengalaman bermain terbaik.',
                'harga' => 15000000
        ]);
    }
}
