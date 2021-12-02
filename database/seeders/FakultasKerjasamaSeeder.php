<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FakultasKerjasama;
use League\Csv\Reader;

class FakultasKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/tabel_fakultas_kerjasama.csv", 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            // $this->command->info($record['fakultas_id']);
            $fakultas = FakultasKerjasama::create([
                'id' => $record['id'],
                'fakultas_id' => $record['fakultas_id'],
                'judul' => $record['judul'],
                'foto' => $record['foto'],                
                'deskripsi' => $record['deskripsi'],
            ]);
        }
    }
}
