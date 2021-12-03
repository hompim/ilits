<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\PesertaFnD;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpenCampusController extends Controller
{
    public function opsi()
    {
        $sesi_2 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 2)->get();
        $sesi_3 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 3)->get();
        $sesi_4 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 4)->get();
        $sesi_5 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 5)->get();
        return view('open-campus.opsi',[
            "title" => "Opsi FnD",
            "sesi_2" => $sesi_2,
            "sesi_3" => $sesi_3,
            "sesi_4" => $sesi_4,
            "sesi_5" => $sesi_5
        ]);
    }

    private function storeOrNone($peserta, $id){
        if($id!=0){
            return PesertaFnD::create([
                "peserta_id" => $peserta->id,
                "departemen_id" => $id
            ]);
        }
    }

    public function regisFnD(Request $request){
        $peserta_event = Auth::user()->user->peserta_event;
        $peserta_event->is_fnd = true;
        $peserta_event->save();
        return redirect(route('open-campus.opsi'));
    }   

    public function storeDep(Request $request){
        $peserta_event = Auth::user()->user->peserta_event;   
        $this->storeOrNone($peserta_event, $request->sesi2);
        $this->storeOrNone($peserta_event, $request->sesi3);
        $this->storeOrNone($peserta_event, $request->sesi4);
        $this->storeOrNone($peserta_event, $request->sesi5);
    
        return redirect(route('open-campus.thank-you'));
        // try{
        // } catch (Exception $e) {
        //     return redirect()->back()->with([
        //         'message' => 'Pendaftaran gagal, silahkan mendaftar departemen kembali',
        //         'status' => 'danger'
        //     ]);
        // }
    }

    private function getNameOrNone($id){
        if($id==0){
            return (object)[
                "nama" => "Tidak Memilih"
            ];
        }
        return Departemen::select('nama')->find($id);
    }

    //API
    public function choosenFnD($sesi2, $sesi3, $sesi4, $sesi5) {   
        $sesi2Nama = $this->getNameOrNone($sesi2);
        $sesi3Nama = $this->getNameOrNone($sesi3);
        $sesi4Nama = $this->getNameOrNone($sesi4);
        $sesi5Nama = $this->getNameOrNone($sesi5);
        $res = [
            'sesi2' => $sesi2Nama->nama,
            'sesi3' => $sesi3Nama->nama,
            'sesi4' => $sesi4Nama->nama,
            'sesi5' => $sesi5Nama->nama
        ];
        return json_encode($res);
    }

    public function detailKuota($id){
        if($id==0){
            return json_encode("-");
        }
        $dep = Departemen::find($id);
        return json_encode($dep->kuota);
    }
}
