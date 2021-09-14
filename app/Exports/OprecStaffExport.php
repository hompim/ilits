<?php

namespace App\Exports;

use App\Models\OprecStaff;
use Maatwebsite\Excel\Concerns\FromCollection;

class OprecStaffExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OprecStaff::all();
    }
}
