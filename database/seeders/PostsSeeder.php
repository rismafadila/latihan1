<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tajwid Menyenangkan', 'content'=>'lorem ipsum'],
            ['title'=>'Bacaan Sholat', 'content'=>'lorem ipsum'],
            ['title'=>'Juz Amma', 'content'=>'lorem ipsum']
            ];
            // masukkan data ke database
            DB::table('posts')->insert($posts);
    }
}
