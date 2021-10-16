<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            ['nipd'=>'123', 'nama'=>'Risma Septiani Fadila', 'alamat'=>'jl.cipteng'],
            ['nipd'=>'456', 'nama'=>'Lira', 'alamat'=>'jl.ciodeng'],
            ['nipd'=>'789', 'nama'=>'adzura angelita', 'alamat'=>'jl.tarate'],
            ['nipd'=>'987', 'nama'=>'Abelina', 'alamat'=>'jl.sindang palay'],
            ['nipd'=>'654', 'nama'=>'Tiara', 'alamat'=>'jl.cibaduyut'],
            ];
            // masukkan data ke database
            DB::table('dosens')->insert($dosen);
    }
}
