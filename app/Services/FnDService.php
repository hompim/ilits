<?php
namespace App\Services;

use App\Models\Peserta;
use App\Models\PesertaFnD;
use App\Models\User;

class FnDService {
    public function getPesertaWithSesi(){
        $pesertas = Peserta::all();
        $sesi1 = "Pengenalan Fakultas";
        $data = array();
        foreach ($pesertas as $peserta) {
            $peserta_event = $peserta->peserta_event;
            if($peserta_event->is_fnd){

                $peserta_nama = $peserta->nama_lengkap;
                
                $sesi2 = PesertaFnD::where('peserta_id', $peserta_event->id)
                ->wherehas('departemen', function($q){
                    $q->where('sesi_id', 2);
                })->first();
    
                if($sesi2){
                    $sesi2 = $sesi2->departemen->nama;
                } else{
                    $sesi2 = "Tidak Memilih";
                }
    
                $sesi3 = PesertaFnD::where('peserta_id', $peserta_event->id)
                            ->wherehas('departemen', function($q){
                                $q->where('sesi_id', 3);
                            })->first();
                if($sesi3){
                    $sesi3 = $sesi3->departemen->nama;
                } else{
                    $sesi3 = "Tidak Memilih";
                }
    
                $sesi4 = PesertaFnD::where('peserta_id', $peserta_event->id)
                            ->wherehas('departemen', function($q){
                                $q->where('sesi_id', 4);
                            })->first();
                if($sesi4){
                    $sesi4 = $sesi4->departemen->nama;
                } else{
                    $sesi4 = "Tidak Memilih";
                }
    
                $sesi5 = PesertaFnD::where('peserta_id', $peserta_event->id)
                            ->wherehas('departemen', function($q){
                                $q->where('sesi_id', 5);
                            })->first();
                if($sesi5){
                    $sesi5 = $sesi5->departemen->nama;
                } else{
                    $sesi5 = "Tidak Memilih";
                }
                array_push($data, compact("peserta_nama", "sesi1", "sesi2", "sesi3", "sesi4", "sesi5"));
            }
        }
        return $data;
    }
}
