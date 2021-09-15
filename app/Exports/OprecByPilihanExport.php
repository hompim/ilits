<?php

namespace App\Exports;

use App\Models\OprecStaff;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class OprecByPilihanExport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromQuery, WithHeadings, WithMapping, WithCustomValueBinder, WithTitle
{
    use Exportable;

    public function __construct($date, $divisi)
    {
        $this->date = $date;
        $this->divisi = $divisi;
    }

    public function query()
    {
        return OprecStaff::query()->whereDay('created_at', $this->date)->where('pilihan_1', $this->divisi);
    }

    public function title(): string
    {
        return $this->divisi;
    }

    public function headings(): array
    {
        return [
            'nama_lengkap', 
            'nrp',
            'fakultas',
            'departemen',
            'angkatan',
            'kota_asal',
            'apa_itu_ilits',
            'motivasi_ilits',
            'pilihan_1',
            'alasan_pilihan_1',
            'pilihan_2',
            'alasan_pilihan_2',
            'komitmen'
        ];
    }

    public function map($staff): array
    {
        return [
            $staff->nama_lengkap,
            $staff->nrp,
            $staff->fakultas,
            $staff->departemen,
            $staff->angkatan,
            $staff->kota_asal,
            $staff->apa_itu_ilits,
            $staff->motivasi_ilits,
            $staff->pilihan_1,
            $staff->alasan_pilihan_1,
            $staff->pilihan_2,
            $staff->alasan_pilihan_2,
            $staff->komitmen,
        ];
    }
}   