<?php

namespace Database\Seeders;

use App\Models\KotaKab;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basePath = 'seeders/csv/';
        $this->importDataFromCsv(Provinsi::class, $basePath.'provinsi.csv');
        $this->importDataFromCsv(KotaKab::class, $basePath.'kota_kab.csv', 'provinsi_id');
    }

    private function importDataFromCsv($model, $fileName, $foreignKey = null) {
        $records = Reader::createFromPath(database_path($fileName), 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);
        foreach ($records as $record) {
            if ($foreignKey == null) {
                $data = $model::create([
                    'id' => $record['id'],
                    'nama' => $record['name'],
                ]);
            } else {
                $data = $model::create([
                    'id' => $record['id'],
                    'nama' => $record['name'],
                    $foreignKey => $record['foreign']
                ]);
            }
        }
    }
}
