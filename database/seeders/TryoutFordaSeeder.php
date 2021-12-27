<?php

namespace Database\Seeders;

use App\Models\TryoutForda;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class TryoutFordaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function generateRandomString($length = 5) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function run()
    {
        $records = Reader::createFromPath(database_path("seeders/csv/tryoutForda.csv"), 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            TryoutForda::create([
                'forda_id' => $record['forda_id'],
                'biaya' => $record['biaya'],
                'nama_bank' => $record['nama_bank'],
                'no_rek' => $record['no_rek'],
                'nama_rek' => $record['nama_rek'],
                'id_line_pj' => $record['id_line_pj'],
                'hp_pj' => $record['hp_pj'],
                'nama_pj' => $record['nama_pj'],
                'kode_presensi' => $this->generateRandomString()
            ]);
        }
    }
}
