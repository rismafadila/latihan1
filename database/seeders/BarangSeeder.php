<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang =[
            ['nama'=>'sepatu','varian'=>'barang','harga_beli'=>150000,'harga_jual'=>200000],
            ['nama'=>'sendal','varian'=>'barang','harga_beli'=>17000,'harga_jual'=>20000],
            ['nama'=>'jam','varian'=>'barang','harga_beli'=>30000,'harga_jual'=>35000],
            ['nama'=>'baju','varian'=>'barang','harga_beli'=>75000,'harga_jual'=>90000],
            ['nama'=>'tas','varian'=>'barang','harga_beli'=>50000,'harga_jual'=>75000]
        ];
        DB::table('barangs')->insert($barang);
    }
}
