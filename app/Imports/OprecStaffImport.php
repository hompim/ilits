<?php

namespace App\Imports;

use App\Models\OprecStaff;
use Maatwebsite\Excel\Concerns\ToModel;

class OprecStaffImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new OprecStaff([
            'nama_lengkap'     => $row[1],
            'nrp'    => $row[2],
            'fakultas'     => $row[3],
            'departemen'    => $row[4],
            'angkatan'     => $row[5],
            'kota_asal'    => $row[6],
            'apa_itu_ilits'     => $row[7],
            'motivasi_ilits'    => $row[8],
            'pilihan_1'     => $row[9],
            'alasan_pilihan_1'    => $row[10],
            'pilihan_2'     => $row[11],
            'alasan_pilihan_2'    => $row[12],
            'komitmen'    => $row[13],

        ]);
    }
}
