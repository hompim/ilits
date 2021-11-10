<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakultas = [
            [1,1,'SCIENTICS','https://www.zoom.us'],
            [2,1,'MARTECH','https://www.zoom.us'],
            [3,1,'INDSYS','https://www.zoom.us'],
            [4,1,'ELECTICS','https://www.zoom.us'],
            [5,1,'CIVPLAN','https://www.zoom.us'],
            [6,1,'CREABIZ','https://www.zoom.us'],
            [7,1,'VOCATION','https://www.zoom.us'],
        ];

        foreach($fakultas as $index => $fak)
        {
            $fakultas = Fakultas::create([
                'id' => $fak[0],
                'sesi_id' => $fak[1],
                'nama' => $fak[2],
                'link_zoom' => $fak[3],
            ]);
        }
    }
}
