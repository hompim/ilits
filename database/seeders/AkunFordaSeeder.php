<?php

namespace Database\Seeders;

use App\Models\Forda;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunFordaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forda = Forda::all();
        foreach($forda as $i){
            $i->user()->create([
                'name' => str_replace(' ', '', $i->nama),
                'email' => str_replace(' ', '', $i->nama).'@inilhoits.ac.id',
                'password' => Hash::make(str_replace(' ', '', $i->nama).'123')
            ]);
        }
    }
}
