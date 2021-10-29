<?php

namespace Database\Seeders;

use App\Models\Forda;
use App\Models\FordaDaerah;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use League\Csv\Reader;


class FordaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath(database_path("seeders/csv/fordas.csv"), 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            $forda = Forda::create([
                'nama' => $record['Nama Forda']
            ]);
            $kota_kab = explode(" ", $record['kota_kab_id']);
            foreach ($kota_kab as $i){
                FordaDaerah::create([
                    'forda_id' => $forda->id,
                    'kota_kab_id' => $i
                ]);
            }
        }
    }
}
