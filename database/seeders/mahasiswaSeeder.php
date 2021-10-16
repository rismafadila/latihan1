<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            ['nim'=>'123', 'nama'=>'Risma Septiani Fadila', 'jurusan'=>'Arsitektur','wali'=>'risma'],
            ['nim'=>'456', 'nama'=>'Lira', 'jurusan'=>'T.Informatika','wali'=>'lira'],
            ['nim'=>'789', 'nama'=>'adzura angelita', 'jurusan'=>'Ilmu Komunikasi','wali'=>'jura'],
            ['nim'=>'987', 'nama'=>'Abelina', 'jurusan'=>'Ekonimi dan Bisnis','wali'=>'abel'],
            ['nim'=>'654', 'nama'=>'Tiara', 'jurusan'=>'Agribisnis','wali'=>'tiara'],
            ];
            // masukkan data ke database
            DB::table('mahasiswas')->insert($mhs);
    }
}
