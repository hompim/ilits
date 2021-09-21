<?php

namespace App\Imports;

use App\Models\OprecStaff;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class StaffMacImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new OprecStaff([
            'nama_lengkap' => $row[0],
            'nrp' => strval($row[1]),
            "fakultas" => $row[2],
            "departemen" => $row[3],
            "angkatan" => strval($row[4]),
            "kota_asal" => $row[5],
            "apa_itu_ilits" => $row[6],
            "motivasi_ilits" => $row[7],
            "pilihan_1"=> $row[8],
            "alasan_pilihan_1" => $row[9],
            "pilihan_2" => $row[10],
            "alasan_pilihan_2" => $row[11],
            "komitmen" => $row[12],
            "updated_at" => Carbon::now()->toDateTimeString(),
            "created_at" => Carbon::now()->toDateTimeString(),
        ]);
    }
}
