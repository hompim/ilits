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
    public function run()
    {
        $this->call([
            FordaSeeder::class,
            //Kalau gk butuh peserta, komen aja line di bawah
            // PesertaSeeder::class
        ]);
        $this->call([
            PesertaSeeder::class,
            //Kalau gk butuh peserta, komen aja line di bawah
            // PesertaSeeder::class
        ]);
    }
}
