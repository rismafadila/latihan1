<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    // {$this->call(dosenSeeder::class);

    //     $this->call(PostsSeeder::class);
    //     $this->command->info("Sample Data Sudah Terisi");
        $this->call(HeroSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(PesananSeeder::class);
        $this->call(PembelianSeeder::class);
        $this->call(PembeliSeeder::class);
        $this->call(SuplierSeeder::class);

    }
}
