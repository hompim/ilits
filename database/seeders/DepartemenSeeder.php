<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departemen = [
            [1,2,15,'Tekling','https://www.zoom.us',75],
            [2,2,15,'PWK','https://www.zoom.us',75],
            [3,3,17,'Sipil','https://www.zoom.us',100],
            [4,3,17,'Infrastruktur Sipil','https://www.zoom.us',100],
            [5,4,16,'Arsitektur','https://www.zoom.us',100],
            [6,4,16,'Desain Interior','https://www.zoom.us',100],
            [7,5,18,'Geomatika','https://www.zoom.us',75],
            [8,5,18,'Geofisika','https://www.zoom.us',75],
            [9,2,9,'MaMet','https://www.zoom.us',75],
            [10,2,9,'Kimia Industri','https://www.zoom.us',75],
            [11,3,14,'Elektro','https://www.zoom.us',75],
            [12,3,14,'Elektro Otomasi','https://www.zoom.us',75],
            [13,4,2,'Teknik Kimia','https://www.zoom.us',100],
            [14,4,2,'Kimia','https://www.zoom.us',100],
            [15,5,1,'Mesin','https://www.zoom.us',100],
            [16,5,1,'Mesin Industri','https://www.zoom.us',100],
            [17,2,7,'Teknik Fisika','https://www.zoom.us',75],
            [18,2,3,'Fisika','https://www.zoom.us',75],
            [19,3,6,'Statistika','https://www.zoom.us',75],
            [20,3,6,'Statistika Bisnis','https://www.zoom.us',75],
            [21,4,19,'Aktuaria','https://www.zoom.us',75],
            [22,4,19,'Matematika','https://www.zoom.us',75],
            [23,5,13,'Biologi','https://www.zoom.us',75],
            [24,5,13,'Biomedik','https://www.zoom.us',75],
            [25,2,3,'Sistem dan Industri','https://www.zoom.us',100],
            [26,2,7,'Instrumentasi','https://www.zoom.us',100],
            [27,3,8,'DKV','https://www.zoom.us',100],
            [28,3,8,'Desain Produk','https://www.zoom.us',100],
            [29,4,10,'Informatika','https://www.zoom.us',100],
            [30,4,10,'Teknik Komputer','https://www.zoom.us',100],
            [31,5,4,'Sistem Informasi','https://www.zoom.us',100],
            [32,5,4,'Teknologi Informasi','https://www.zoom.us',100],
            [33,2,12,'Teknik Perkapalan','https://www.zoom.us',75],
            [34,2,11,'Sistem Perkapalan','https://www.zoom.us',75],
            [35,3,12,'Transportasi Laut','https://www.zoom.us',75],
            [36,3,11,'Kelautan','https://www.zoom.us',75],
            [37,5,5,'Studi Pembangunan','https://www.zoom.us',100],
            [38,5,5,'Manajemen Bisnis','https://www.zoom.us',100]
        ];
        foreach ($departemen as $index => $dep)
        {
            $departemen = Departemen::create([
                'id'=> $dep[0],
                'sesi_id' => $dep[1],
                'kelas_id' => $dep[2],
                'nama' => $dep[3],
                'link_zoom' => $dep[4],
                'kuota' => $dep[5],
            ]);
        }
    }
}
