<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumni;
use League\Csv\Reader;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/alumni.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            if(!$record['deskripsi']){
                $alumni = Alumni::create([
                    'id' => $record['id'],
                    'departemen_id' => $record['departemen_id'],
                    'nama' => $record['nama'],
                    'deskripsi' => NULL,
                    'foto' => NULL,
                ]);
            }
            else{
                $alumni = Alumni::create([
                    'id' => $record['id'],
                    'departemen_id' => $record['departemen_id'],
                    'nama' => $record['nama'],
                    'deskripsi' => $record['deskripsi'],
                    'foto' => NULL,
                ]);
            }  
        }
    }
}
