<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\Pembahasan;

class PembahasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/pembahasan.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            $pembahasan = Pembahasan::create([
                'id' => $record['id'],
                'jenis_tryout' => $record['jenis_tryout'],
                'judul' => $record['judul'],
                'link_download' => $record['link_download'],
            ]);
        }
    }
}
