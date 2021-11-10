<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [1,1,1,100,'https://www.whatsapp.com','https://www.zoom.us'],
            [2,2,1,100,'https://www.whatsapp.com','https://www.zoom.us'],
            [3,3,1,150,'https://www.whatsapp.com','https://www.zoom.us'],
            [4,4,1,100,'https://www.whatsapp.com','https://www.zoom.us'],
            [5,1,2,70,'https://www.whatsapp.com','https://www.zoom.us'],
            [6,2,2,50,'https://www.whatsapp.com','https://www.zoom.us'],
            [7,3,2,50,'https://www.whatsapp.com','https://www.zoom.us'],
            [8,4,2,100,'https://www.whatsapp.com','https://www.zoom.us'],
            [9,1,3,50,'https://www.whatsapp.com','https://www.zoom.us'],
            [10,2,3,100,'https://www.whatsapp.com','https://www.zoom.us'],
            [11,3,3,30,'https://www.whatsapp.com','https://www.zoom.us'],
            [12,4,3,30,'https://www.whatsapp.com','https://www.zoom.us'],
            [13,1,4,30,'https://www.whatsapp.com','https://www.zoom.us'],
            [14,2,4,60,'https://www.whatsapp.com','https://www.zoom.us'],
            [15,3,4,50,'https://www.whatsapp.com','https://www.zoom.us'],
            [16,4,4,100,'https://www.whatsapp.com','https://www.zoom.us'],
            [17,1,5,80,'https://www.whatsapp.com','https://www.zoom.us'],
            [18,2,5,30,'https://www.whatsapp.com','https://www.zoom.us'],
            [19,3,5,50,'https://www.whatsapp.com','https://www.zoom.us'],
        ];
        foreach($kelas as $index=>$kls)
        {
            $kelas = Kelas::create([
                'id' => $kls[0],
                'sesi_id' => $kls[1],
                'nomor_kelas' => $kls[2],
                'kuota' => $kls[3],
                'link_wa' => $kls[4],
                'link_zoom' => $kls[5],
            ]);
        }
    }
}
