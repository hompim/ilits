<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SesiODL;

class SesiOdlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sesi = [
            [1,'08.00 - 11.30', 'Sabtu, 15 Januari 2022'],
            [2,'12.00 - 16.00', 'Sabtu, 15 Januari 2022'],
            [3,'08.00 - 11.30', 'Minggu, 16 Januari 2022'],
            [4,'12.00 - 16.00', 'Minggu, 16 Januari 2022'],
        ];
        foreach($sesi as $index => $s)
        {
            $sesi = SesiODL::create([
                'id' => $s[0],
                'waktu' => $s[1],
                'tanggal' => $s[2],
            ]);
        }
    }
}
