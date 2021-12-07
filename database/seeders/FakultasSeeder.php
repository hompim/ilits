<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;
use League\Csv\Reader;
use Carbon\Carbon;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/fakultas.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            // $this->command->info($record['fakultas_id']);
            $fakultas = Fakultas::create([
                'id' => $record['fakultas_id'],
                'nama' => $record['nama'],
                'foto' => $record['foto'],                
                'deskripsi' => $record['deskripsi'],
                'link_zoom' => $record['link_zoom'],
                'sesi_id' => $record['sesi_id'],
                'link_video' => $record['link_video'],
                'singkatan' => $record['singkatan'],
                'link_map' => $record['link_map'],
                'foto_header' => $record['foto_header'],
                'slug' => $record['slug'],
            ]);
        }
    }
}
