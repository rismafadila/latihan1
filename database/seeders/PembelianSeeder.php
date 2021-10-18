<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian =[
            ['nama_barang'=>'jam','nama_suplier'=>'Risma','qty'=>5,'tgl'=>'2021-05-05'],
            ['nama_barang'=>'sendal','nama_suplier'=>'Abelina','qty'=>6,'tgl'=>'2021-06-06'],
            ['nama_barang'=>'sepatu','nama_suplier'=>'Seni','qty'=>7,'tgl'=>'2021-07-07'],
            ['nama_barang'=>'tas','nama_suplier'=>'Adzura','qty'=>8,'tgl'=>'2021-08-08'],
            ['nama_barang'=>'topi','nama_suplier'=>'Kayla','qty'=>9,'tgl'=>'2021-09-09'],
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
// $table->string('nama_barang');
//             $table->string('nama_suplier');
//             $table->integer('qty');
//             $table->date('tgl');
