<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fasilitas;
use League\Csv\Reader;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/fasilitas.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            // $this -> command -> info($record['id']);
            if(!$record['deskripsi']){
                $alumni = Fasilitas::create([
                    'id' => $record['id'],
                    'departemen_id' => $record['departemen_id'],
                    'judul' => $record['judul'],
                    'deskripsi' => NULL,
                    'foto' => $record['foto'],
                ]);
            }
            else{
                $alumni = Fasilitas::create([
                    'id' => $record['id'],
                    'departemen_id' => $record['departemen_id'],
                    'judul' => $record['judul'],
                    'deskripsi' => $record['deskripsi'],
                    'foto' => $record['foto'],
                ]);
            }  
        }
    }
}
