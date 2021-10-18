<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan =[
            ['nama_pelanggan'=>'Risma','nama_barang'=>'jam','qty'=>5,'tgl_pesan'=>'2021-05-05'],
            ['nama_pelanggan'=>'Kayla','nama_barang'=>'sendal','qty'=>6,'tgl_pesan'=>'2021-06-06'],
            ['nama_pelanggan'=>'Abelina','nama_barang'=>'sepatu','qty'=>7,'tgl_pesan'=>'2021-07-07'],
            ['nama_pelanggan'=>'Seni','nama_barang'=>'tas','qty'=>8,'tgl_pesan'=>'2021-08-08'],
            ['nama_pelanggan'=>'Adzura','nama_barang'=>'topi','qty'=>9,'tgl_pesan'=>'2021-09-09'],
        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
// $table->string('nama_pelanggan');
//             $table->string('nama_barang');
//             $table->integer('qty');
//             $table->date('tgl_pesan');
