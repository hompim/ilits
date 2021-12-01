<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProspekKerja;
use League\Csv\Reader;

class ProspekKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/prospek.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            $prospek = ProspekKerja::create([
                'id' => $record['id'],
                'departemen_id' => $record['departemen_id'],
                'nama' => $record['nama'],
                'foto' => NULL,
            ]);
        }
    }
}
