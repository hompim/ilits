<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FakultasSejarah;
use League\Csv\Reader;

class FakultasSejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/tabel_fakultas_sejarah.csv", 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            //$this->command->info($record['tahun ']);
            $fakultas = FakultasSejarah::create([
                'id' => $record['id'],
                'fakultas_id' => $record['fakultas_id'],
                'tahun' => $record['tahun'],               
                'deskripsi' => $record['deskripsi'],
            ]);
        }
    }
}
