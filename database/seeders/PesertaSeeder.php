<?php

namespace Database\Seeders;

use App\Models\Peserta;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $peserta = [
            ['kuncoro', 'Marsudirini', 'Bekasi', 9, '085943267728', NULL, 'pending', NULL, 'saintek', 'tidak'],
            ['Marcell', 'Debritto', 'Jogjakarta', 1, '085943772328', NULL, 'pending', NULL, 'saintek', 'tidak'],
            ['iyok', 'SMK', 'Bandung', 3, '08372842376', NULL, 'pending', NULL, 'soshum', 'tidak'],
            ['Riley Reid', 'Amerika', 'PH Academy', 12, '08592473923', NULL, 'pending', NULL, 'soshum', 'tidak'],
            ['Keqing', 'Atlas Academy', 'Liuye', 16, '085943267723', NULL, 'pending', NULL, 'saintek', 'tidak']
        ];
        foreach ($peserta as $index => $pes) {
            $peserta = Peserta::create([
                'asal_sekolah' => $pes[1],
                'asal_daerah' => $pes[2],
                'forda_id' => $pes[3],
                'no_wa' => $pes[4],
                'bukti_bayar' => $pes[5],
                //'status' => $pes[6],
                'kartu_pelajar' => $pes[7],
                //'pilihan_tryout' => $pes[8],
                //'tryout_online' => $pes[9]
            ]);
            User::create([
                'name' => $pes[0],
                'email_verified_at' => Carbon::now(),
                'email' => 'peserta' . ($index + 1) . '@peserta',
                'password' => Hash::make('123456789'),
                'user_type' => 'App\Models\Peserta',
                'user_id' => $peserta->id
            ]);
        }
    }
}
