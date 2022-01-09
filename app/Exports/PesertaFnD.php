<?php

namespace App\Exports;

use App\Models\Peserta;
use App\Models\PesertaFnD as ModelsPesertaFnD;
use Maatwebsite\Excel\Concerns\FromArray;

class PesertaFnD implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        $pesertas = Peserta::all();
        $data = array();
        foreach ($pesertas as $peserta) {
            $peserta_event = $peserta->peserta_event;
            
            $sesi2 = ModelsPesertaFnD::where('peserta_id', $peserta_event->id)
            ->wherehas('departemen', function($q){
                $q->where('sesi_id', 2);
            })->first();

            if($sesi2){
                $sesi2 = $sesi2->departemen;
            } else{
                $sesi2 = "Tidak Memilih";
            }

            $sesi3 = ModelsPesertaFnD::where('peserta_id', $peserta_event->id)
                        ->wherehas('departemen', function($q){
                            $q->where('sesi_id', 3);
                        })->first();
            if($sesi3){
                $sesi3 = $sesi3->departemen;
            }

            $sesi4 = ModelsPesertaFnD::where('peserta_id', $peserta_event->id)
                        ->wherehas('departemen', function($q){
                            $q->where('sesi_id', 4);
                        })->first();
            if($sesi4){
                $sesi4 = $sesi4->departemen;
            }

            $sesi5 = ModelsPesertaFnD::where('peserta_id', $peserta_event->id)
                        ->wherehas('departemen', function($q){
                            $q->where('sesi_id', 5);
                        })->first();
            if($sesi5){
                $sesi5 = $sesi5->departemen;
            }
        }

    }
}
