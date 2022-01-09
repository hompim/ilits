<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\VideoPembahasan;

class VideoPembahasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = Reader::createFromPath("database/seeders/csv/video_pembahasan.csv", 'r');
        $records->setDelimiter(';');
        $records->setHeaderOffset(0);
        foreach($records as $record){
            $merch = VideoPembahasan::create([
                'id' => $record['id'],
                'jenis_tryout' => $record['jenis_tryout'],
                'subbab' => $record['subbab'],
                'link_video' => $record['link_video'],
            ]);
        }
    }
}
