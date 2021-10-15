<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class biodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio =[
            [
                'id' => 1,'name' => 'Risma Septiani Fadila','bornDate' => '13 september 2003','gender' => 'perempuan',
                'address' => 'jl.ciparay tengah','religion' => 'islam','age' => 160,'hobby'=>'memasak'
            ],
            [
                'id' => 2,'name' => 'Kayla Rahmanisa','bornDate' => '25 oktober 2004','gender' => 'perempuan',
                'address' => 'cibaduyut','religion' => 'islam','age' => 160,'hobby'=>'memasak'
            ],
            [
                'id' => 3,'name' => 'Risma Septiani Fadila','bornDate' => '13 september 2003','gender' => 'perempuan',
                'address' => 'jl.ciparay tengah','religion' => 'islam','age' => 160,'hobby'=>'memasak'
            ],
            [
                'id' => 4,'name' => 'Risma Septiani Fadila','bornDate' => '13 september 2003','gender' => 'perempuan',
                'address' => 'jl.ciparay tengah','religion' => 'islam','age' => 160,'hobby'=>'memasak'
            ],
            [
                'id' => 5,'name' => 'Risma Septiani Fadila','bornDate' => '13 september 2003','gender' => 'perempuan',
                'address' => 'jl.ciparay tengah','religion' => 'islam','age' => 160,'hobby'=>'memasak'
            ],
        ];
        DB::table('biodatas')->insert($bio);
    }
}
