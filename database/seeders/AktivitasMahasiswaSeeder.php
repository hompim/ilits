<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AktivitasMahasiswa;
use League\Csv\Reader;

class AktivitasMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/aktivitas_mahasiswa.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            $aktivitas = AktivitasMahasiswa::create([
                'id' => $record['id'],
                'departemen_id' => $record['departemen_id'],
                'judul' => $record['judul'],
                'deskripsi' => $record['deskripsi'],
                'foto' => NULL,
            ]);
        }
    }
}
