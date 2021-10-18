<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli =[
            ['nama'=>'Risma','jns_kelamin'=>'perempuan','alamat'=>'jl.ciparay tengah','kode_pos'=>4012,'kota'=>'bandung','tgl_lahir'=>'2003-09-13'],
            ['nama'=>'Kayla','jns_kelamin'=>'perempuan','alamat'=>'jl.sekeawi','kode_pos'=>4013,'kota'=>'bandung','tgl_lahir'=>'2004-10-25'],
            ['nama'=>'Abelina','jns_kelamin'=>'perempuan','alamat'=>'jl.sindang palay','kode_pos'=>4014,'kota'=>'bandung','tgl_lahir'=>'2003-12-20'],
            ['nama'=>'Seni','jns_kelamin'=>'perempuan','alamat'=>'jl.sindang palay','kode_pos'=>4015,'kota'=>'bandung','tgl_lahir'=>'2004-10-10'],
            ['nama'=>'Adzura','jns_kelamin'=>'perempuan','alamat'=>'jl.tarate','kode_pos'=>4016,'kota'=>'bandung','tgl_lahir'=>'2003-09-13'],
        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
// $table->string('nama');
//             $table->string('jns_kelamin');
//             $table->string('alamat');
//             $table->integer('kode_pos');
//             $table->string('kota');
//             $table->string('tgl_lahir');
