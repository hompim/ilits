<?php

namespace Database\Seeders;

use App\Models\Forda;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
                'id' => $record['id'],
                'nama' => $record['nama']
            ]);
            User::create([
                'name' => $record['nama'],
                'email_verified_at' => Carbon::now(),
                'email' => str_replace(' ', '', $forda->nama).'@inilhoits.ac.id',
                'password' => Hash::make(str_replace(' ', '', $forda->nama).'123'),
                'user_type' => 'App\Models\Forda',
                'user_id' => $forda->id
            ]);
        }
    }
}
