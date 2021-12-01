<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akreditasi;
use League\Csv\Reader;

class AkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/akreditasi.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        $i = 1;
        foreach ($records as $record) {
            // $this -> command ->info($record['deskripsi']);
            if (!$record['deskripsi']){
                $akreditasi= Akreditasi::create([
                    'id' => $i,
                    'departemen_id' => $record['departemen_id'],
                    'judul' => $record['judul'],
                    'deskripsi' => NULL,
                    'foto' => $record['foto']
                ]);
            }
            else{
                $akreditasi= Akreditasi::create([
                    'id' => $i,
                    'departemen_id' => $record['departemen_id'],
                    'judul' => $record['judul'],
                    'deskripsi' => $record['deskripsi'],
                    'foto' => $record['foto']
                ]);
            }
            $i = $i +1;
        }
    }
}
