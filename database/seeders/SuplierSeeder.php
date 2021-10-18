<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier =[
        ['nama'=>'Risma','alamat'=>'jl.ciparay tengah','kode_pos'=>4012,'kota'=>'bandung'],
            ['nama'=>'Kayla','alamat'=>'jl.sekeawi','kode_pos'=>4013,'kota'=>'bandung'],
            ['nama'=>'Abelina','alamat'=>'jl.sindang palay','kode_pos'=>4014,'kota'=>'bandung'],
            ['nama'=>'Seni','alamat'=>'jl.sindang palay','kode_pos'=>4015,'kota'=>'bandung'],
            ['nama'=>'Adzura','alamat'=>'jl.tarate','kode_pos'=>4016,'kota'=>'bandung']
        ];
        DB::table('supliers')->insert($suplier);
    }

}
// $table->string('nama');
// $table->string('alamat');
// $table->integer('kode_pos');
// $table->string('kota');
