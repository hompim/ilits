<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestasi;
use League\Csv\Reader;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/prestasi.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            $prestasi = Prestasi::create([
                'id' => $record['id'],
                'departemen_id' => $record['dep_id'],
                'nama' => $record['nama'],
                'deskripsi' => $record['deskripsi'],
                'foto' => $record['foto'],
            ]);
        }
    }
}
