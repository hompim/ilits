<?php

namespace App\Imports;

use App\Models\OprecStaffResult;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OprecStaffImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new OprecStaffResult([
            'nama' => $row['nama'],
            'nrp' => $row['nrp'],
            'departemen' => $row['departemen'],
            'divisi_subdivisi' => $row['divisisubdivisi'],
            'pertanyaan' => $row['pertanyaan'],
        ]);
    }
}
