<?php

namespace App\Http\Controllers;

use App\Models\PesertaFnD;
use App\Models\PesertaODL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesertaOpenCampusController extends Controller
{
    public function indexFND(){
        $peserta_event = Auth::user()->user->peserta_event;
        $sesi2 = PesertaFnD::where('peserta_id', $peserta_event->id)
                    ->wherehas('departemen', function($q){
                        $q->where('sesi_id', 2);
                    })->first();
        if($sesi2){
            $sesi2 = $sesi2->departemen;
        }

        $sesi3 = PesertaFnD::where('peserta_id', $peserta_event->id)
                    ->wherehas('departemen', function($q){
                        $q->where('sesi_id', 3);
                    })->first();
        if($sesi3){
            $sesi3 = $sesi3->departemen;
        }

        $sesi4 = PesertaFnD::where('peserta_id', $peserta_event->id)
                    ->wherehas('departemen', function($q){
                        $q->where('sesi_id', 4);
                    })->first();
        if($sesi4){
            $sesi4 = $sesi4->departemen;
        }
        
        $sesi5 = PesertaFnD::where('peserta_id', $peserta_event->id)
                    ->wherehas('departemen', function($q){
                        $q->where('sesi_id', 5);
                    })->first();
        if($sesi5){
            $sesi5 = $sesi5->departemen;
        }

        $sesis = compact("sesi2", "sesi3", "sesi4", "sesi5");

        return view('peserta.fnd-dashboard', [
            'sesis' => $sesis
        ]);
    }

    public function indexODL(){
        $peserta_event = Auth::user()->user->peserta_event;
        $sesi1 = DB::table('departemens')
                    ->select(DB::raw("tmp.link_zoom, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, tmp.link_wa, tmp.sesi_id, tmp.peserta_id, tmp.nomor_kelas"))
                    ->join(DB::raw('(SELECT kelas.id as kelas_id, kelas.link_zoom, kelas.link_wa, kelas.sesi_id, kelas.nomor_kelas, peserta_odl.peserta_id FROM kelas JOIN peserta_odl ON peserta_odl.kelas_id=kelas.id) as tmp'), function($join){
                        $join->on('departemens.kelas_id', '=', 'tmp.kelas_id');
                    })
                    ->whereNotNull('departemens.kelas_id')
                    ->where('tmp.sesi_id', 1)
                    ->where('tmp.peserta_id', $peserta_event->id)
                    ->groupBy('departemens.kelas_id')
                    ->first();
        $sesi2 = DB::table('departemens')
                    ->select(DB::raw("tmp.link_zoom, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, tmp.link_wa, tmp.sesi_id, tmp.peserta_id, tmp.nomor_kelas"))
                    ->join(DB::raw('(SELECT kelas.id as kelas_id, kelas.link_zoom, kelas.link_wa, kelas.sesi_id, kelas.nomor_kelas, peserta_odl.peserta_id FROM kelas JOIN peserta_odl ON peserta_odl.kelas_id=kelas.id) as tmp'), function($join){
                        $join->on('departemens.kelas_id', '=', 'tmp.kelas_id');
                    })
                    ->whereNotNull('departemens.kelas_id')
                    ->where('tmp.sesi_id', 2)
                    ->where('tmp.peserta_id', $peserta_event->id)
                    ->groupBy('departemens.kelas_id')
                    ->first();
        $sesi3 = DB::table('departemens')
                    ->select(DB::raw("tmp.link_zoom, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, tmp.link_wa, tmp.sesi_id, tmp.peserta_id, tmp.nomor_kelas"))
                    ->join(DB::raw('(SELECT kelas.id as kelas_id, kelas.link_zoom, kelas.link_wa, kelas.sesi_id, kelas.nomor_kelas, peserta_odl.peserta_id FROM kelas JOIN peserta_odl ON peserta_odl.kelas_id=kelas.id) as tmp'), function($join){
                        $join->on('departemens.kelas_id', '=', 'tmp.kelas_id');
                    })
                    ->whereNotNull('departemens.kelas_id')
                    ->where('tmp.sesi_id', 3)
                    ->where('tmp.peserta_id', $peserta_event->id)
                    ->groupBy('departemens.kelas_id')
                    ->first();
        $sesi4 = DB::table('departemens')
                    ->select(DB::raw("tmp.link_zoom, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, tmp.link_wa, tmp.sesi_id, tmp.peserta_id, tmp.nomor_kelas"))
                    ->join(DB::raw('(SELECT kelas.id as kelas_id, kelas.link_zoom, kelas.link_wa, kelas.sesi_id, kelas.nomor_kelas, peserta_odl.peserta_id FROM kelas JOIN peserta_odl ON peserta_odl.kelas_id=kelas.id) as tmp'), function($join){
                        $join->on('departemens.kelas_id', '=', 'tmp.kelas_id');
                    })
                    ->whereNotNull('departemens.kelas_id')
                    ->where('tmp.sesi_id', 4)
                    ->where('tmp.peserta_id', $peserta_event->id)
                    ->groupBy('departemens.kelas_id')
                    ->first();
        $sesis = compact("sesi1", "sesi2", "sesi3", "sesi4");

        return view('peserta.odl-dashboard', [
            'sesis' => $sesis
        ]);
    }

    public function indexITSFair()
    {
        return view('peserta.its-fair-dashboard');
    }
}
