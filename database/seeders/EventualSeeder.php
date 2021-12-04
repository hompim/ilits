<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eventual;
use League\Csv\Reader;

class EventualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/eventual.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            $eventual = Eventual::create([
                'id' => $record['id'],
                'nama' => $record['nama'],
                'deskripsi' => $record['deskripsi'],
            ]);
        }
    }
}
