<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SesiFnd;

class SesiFndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sesi = [
            [1,'08.00 - 10.00'],
            [2,'10.00 - 11.05'],
            [3,'11.35 - 12.40'],
            [4,'13.00 - 14.15'],
            [5,'14.45 - 16.00'],
        ];
        foreach($sesi as $index => $s)
        {
            $sesi = SesiFnd::create([
                'id' => $s[0],
                'waktu' => $s[1],
            ]);
        }
    }
}
