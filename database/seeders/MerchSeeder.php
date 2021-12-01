<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merch;
use League\Csv\Reader;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/merch.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            // $this -> command -> info($record['id']);
            // $this -> command -> info($record['Nama']);
            // $this -> command -> info($record['Harga']);
            // $this -> command -> info($record['Gambar']);
            // $this -> command -> info($record['Link']);
            $merch = Merch::create([
                'id' => $record['id'],
                'nama' => $record['Nama'],
                'harga' => $record['Harga'],
                'gambar' => $record['Gambar'],
                'link' => $record['Link'],
            ]);
        }
    }
}
