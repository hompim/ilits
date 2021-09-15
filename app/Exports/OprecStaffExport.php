<?php

namespace App\Exports;

use App\Models\OprecStaff;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class OprecStaffExport implements WithMultipleSheets
{
    use Exportable;

    protected $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

        /**
     * @return array
     */
    public function sheets(): array
    {
        $pil_divisi = [
            'Technical Division - Central Event Subdivision',
            'Technical Division - Regional Event Subdivision',
            'Technical Division - Material Subdivision',
            'Technical Division - Operational Subdivision',
            'Secretarial Division',
            'IT Development Division',
            'Branding Division - Content Creator Subdivision',
            'Branding Division - Documentation Subdivision',
            'Branding Division - Creative Subdivision',
            'Branding Division - Campaign & Marketing Subdivision',
            'Public Relation Division',
            'Finance Division - Fundraising Subdivision',
            'Finance Division - Sponsoship Subdivision' 
        ];

        $sheets = [];

        foreach($pil_divisi as $pil){
            $sheets[] = new OprecByPilihanExport($this->date, $pil);
        }

        return $sheets;
    }
}
