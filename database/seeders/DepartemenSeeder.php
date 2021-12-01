<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departemen;
use League\Csv\Reader;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/departemen.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            if($record['departemen_id']==24||$record['departemen_id']==29){
                $departemen = Departemen::create([
                    'id' => $record['departemen_id'],
                    'nama' => $record['nama'],
                    'foto' => $record['foto'],                
                    'deskripsi' => $record['deskripsi'],
                    'fakultas_id' => $record['fakultas_id'],
                    'sesi_id' => NULL,
                    'kelas_id' => NULL,
                    'kuota'=>$record['kuota'],
                    'link_zoom'=>$record['link_zoom']
                ]);
            }
            else{
                $departemen = Departemen::create([
                    'id' => $record['departemen_id'],
                    'nama' => $record['nama'],
                    'foto' => $record['foto'],                
                    'deskripsi' => $record['deskripsi'],
                    'fakultas_id' => $record['fakultas_id'],
                    'sesi_id' => $record['sesi_id'],
                    'kelas_id' => $record['kelas_id'],
                    'kuota'=>$record['kuota'],
                    'link_zoom'=>$record['link_zoom']
                ]);
            } 
        }
    }
}
