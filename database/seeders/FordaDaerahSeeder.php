<?php

namespace Database\Seeders;

use App\Models\FordaDaerah;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class FordaDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath(database_path("seeders/csv/forda_daerah.csv"), 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            FordaDaerah::create([
                'forda_id' => $record['forda_id'],
                'kota_kab_id' => $record['kota_kab_id']
            ]);
        }
    }
}
