<?php

namespace App\Exports;

use App\Models\Peserta;
use App\Models\PesertaFnD as ModelsPesertaFnD;
use App\Services\FnDService;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PesertaFnD implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'Nama Peserta',
            'Sesi 1',
            'Sesi 2',
            'Sesi 3',
            'Sesi 4',
            'Sesi 5'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        $fnDService = new FnDService();
        $data = $fnDService->getPesertaWithSesi();
        return $data;
    }
}
