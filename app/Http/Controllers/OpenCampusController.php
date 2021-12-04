<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Kelas;
use App\Models\PesertaFnD;
use App\Models\PesertaODL;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OpenCampusController extends Controller
{
    //FND
    public function registerFND(){
        if(Auth::user()->user->peserta_event->is_fnd){
            return redirect(route('open-campus.fnd.fakultas'));
        } 
        if(PesertaFnD::where('peserta_id', Auth::user()->user->peserta_event->id)->count()){
            return redirect(route('open-campus.thank-you'));
        }
        return view('open-campus.register-fnd',["title" => "Daftar FnD"]);
    }

    public function fakultas(){
        if(!Auth::user()->user->peserta_event->is_fnd){
            return redirect(route('open-campus.fnd.register'));
        }
        if(PesertaFnD::where('peserta_id', Auth::user()->user->peserta_event->id)->count()){
            return redirect(route('open-campus.thank-you'));
        }
        return view('open-campus.dashboard-fnd',["title" => "Fakultas"]);
    }

    public function opsi()
    {
        if(Auth::user()->user->peserta_event->is_fnd){
            if(PesertaFnD::where('peserta_id', Auth::user()->user->peserta_event->id)->count()){
                return redirect(route('open-campus.thank-you'));
            }
            $sesi_2 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 2)->get();
            $sesi_3 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 3)->get();
            $sesi_4 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 4)->get();
            $sesi_5 = Departemen::select('id', 'nama', 'kuota')->where('sesi_id', 5)->get();
            return view('open-campus.opsi',[
                "title" => "Departemen",
                "sesi_2" => $sesi_2,
                "sesi_3" => $sesi_3,
                "sesi_4" => $sesi_4,
                "sesi_5" => $sesi_5
            ]);
        } 
        return redirect(route('open-campus.fnd.register'));
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
        return redirect(route('open-campus.fnd.fakultas'));
    }
    
    public function storeDep(Request $request){
        try{
            $peserta_event = Auth::user()->user->peserta_event;   
            $this->storeOrNone($peserta_event, $request->sesi2);
            $this->storeOrNone($peserta_event, $request->sesi3);
            $this->storeOrNone($peserta_event, $request->sesi4);
            $this->storeOrNone($peserta_event, $request->sesi5);
        
            return redirect(route('open-campus.thank-you'));
        } catch (Exception $e) {
            return redirect()->back()->with([
                'message' => 'Pendaftaran gagal, silahkan mendaftar departemen kembali',
                'status' => 'danger'
            ]);
        }
    }

    public function thxFND(){
        if(Auth::user()->user->peserta_event->is_fnd){
            if(PesertaFnD::where('peserta_id', Auth::user()->user->peserta_event->id)->count()){
                return view('open-campus.thank-you',["title" => "Thank You!"]);
            }
            return redirect(route('open-campus.fnd.fakultas'));
        }
        return redirect(route('open-campus.fnd.register'));
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

    //ITS Fair
    public function registerIF(){
        if(Auth::user()->user->peserta_event->is_its_fair){
            return redirect(route('open-campus.its-fair.thank-you'));
        }
        return view('open-campus.register-itsFair', ["title" => "Daftar ITS Fair"]);
    }

    public function regisITSFair(Request $request){
        $peserta_event = Auth::user()->user->peserta_event;
        $peserta_event->is_its_fair = true;
        $peserta_event->save();
        return redirect(route('open-campus.its-fair.thank-you'));
    }

    public function thxIF()
    {
        if(Auth::user()->user->peserta_event->is_its_fair){
            return view('open-campus.its-fair-thank-you', ["title" => "Thank You!"]);
        }
        return redirect(route('open-campus.its-fair.register'));
    }

    //OpenCampus
    public function register_index()
    {
        if(Auth::user()->user->peserta_event->is_odl){
            return redirect(route('open-campus.odl.register-kelas'));
        }
        if(PesertaODL::where('peserta_id', Auth::user()->user->peserta_event->id)){
            return redirect(route('open-campus.odl.thank-you'));
        }
        return view('open-campus.register-odl', ["title" => "Pendaftaran ODL!"]);
    }

    public function regisFormStore(Request $request){
        $request->validate([
            'bukti_follow' => "required",
            'bukti_poster' => "required"
        ]);

        $peserta_event = Auth::user()->user->peserta_event;
        $peserta_event->is_odl = true;
        $peserta_event->save();

        return redirect(route('open-campus.odl.register-kelas'));
    }

    public function regisKelas(){
        if(!Auth::user()->user->peserta_event->is_odl){
            return redirect(route('open-campus.odl.register'));
        }
        if(PesertaODL::where('peserta_id', Auth::user()->user->peserta_event->id)){
            return redirect(route('open-campus.odl.thank-you'));
        }
        $sesi_1 = DB::table('departemens')
                    ->select(DB::raw("departemens.kelas_id, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, kelas.sesi_id"))
                    ->join('kelas', 'kelas.id', 'departemens.kelas_id')
                    ->whereNotNull('departemens.kelas_id')
                    ->where('kelas.sesi_id', 1)
                    ->groupBy('departemens.kelas_id')
                    ->get();
        $sesi_2 = DB::table('departemens')
                    ->select(DB::raw("departemens.kelas_id, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, kelas.sesi_id"))
                    ->join('kelas', 'kelas.id', 'departemens.kelas_id')
                    ->whereNotNull('departemens.kelas_id')
                    ->where('kelas.sesi_id', 2)
                    ->groupBy('departemens.kelas_id')
                    ->get();
        $sesi_3 = DB::table('departemens')
                    ->select(DB::raw("departemens.kelas_id, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, kelas.sesi_id"))
                    ->join('kelas', 'kelas.id', 'departemens.kelas_id')
                    ->whereNotNull('departemens.kelas_id')
                    ->where('kelas.sesi_id', 3)
                    ->groupBy('departemens.kelas_id')
                    ->get();
        $sesi_4 = DB::table('departemens')
                    ->select(DB::raw("departemens.kelas_id, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, kelas.sesi_id"))
                    ->join('kelas', 'kelas.id', 'departemens.kelas_id')
                    ->whereNotNull('departemens.kelas_id')
                    ->where('kelas.sesi_id', 4)
                    ->groupBy('departemens.kelas_id')
                    ->get();
        return view('open-campus.opsi-odl',[
            "title" => "Pilih Departemen",
            "sesi_1" => $sesi_1,
            "sesi_2" => $sesi_2,
            "sesi_3" => $sesi_3,
            "sesi_4" => $sesi_4
        ]);
    }

    private function storeOrNoneODL($id, $kelas_id){
        if($kelas_id!=0){
            PesertaODL::create([
                'peserta_id' => $id,
                'kelas_id' => $kelas_id
            ]);
        }
    }

    public function regisKelasStore(Request $request){
        try{
            $peserta_event = Auth::user()->user->peserta_event;
            $this->storeOrNoneODL($peserta_event->id, $request->sesi1);
            $this->storeOrNoneODL($peserta_event->id, $request->sesi2);
            $this->storeOrNoneODL($peserta_event->id, $request->sesi3);
            $this->storeOrNoneODL($peserta_event->id, $request->sesi4);
            return redirect(route('open-campus.odl.thank-you'));
        } catch(Exception $e){
            return redirect()->back()->with([
                'message' => 'Pendaftaran gagal, silahkan mendaftar departemen kembali',
                'status' => 'danger'
            ]);
        }
    }

    public function thxODL(){
        if(Auth::user()->user->peserta_event->is_odl){
            if(PesertaODL::where('peserta_id', Auth::user()->user->peserta_event->id)){
                return view('open-campus.odl-thank-you', ["title" => "Thank You!"]);
            }
            return redirect(route('open-campus.odl.register-kelas'));
        }
        return redirect(route('open-campus.odl.register'));
    }

    private function getNamaOrNone($id){
        if($id==0){
            return "Tidak Memilih";
        }
        $dep = DB::table('departemens')
                    ->select(DB::raw("departemens.kelas_id, GROUP_CONCAT(departemens.nama SEPARATOR ' dan ') as nama, departemens.kelas_id"))
                    ->join('kelas', 'kelas.id', 'departemens.kelas_id')
                    ->whereNotNull('departemens.kelas_id')
                    ->where('departemens.kelas_id', $id)
                    ->groupBy('departemens.kelas_id')
                    ->first();
        return $dep->nama;
    }
    //API
    public function kelasODL($sesi1, $sesi2, $sesi3, $sesi4) {   
        $sesi1Nama = $this->getNamaOrNone($sesi1);
        $sesi2Nama = $this->getNamaOrNone($sesi2);
        $sesi3Nama = $this->getNamaOrNone($sesi3);
        $sesi4Nama = $this->getNamaOrNone($sesi4);
        $res = [
            'sesi1' => $sesi1Nama,
            'sesi2' => $sesi2Nama,
            'sesi3' => $sesi3Nama,
            'sesi4' => $sesi4Nama
        ];
        return json_encode($res);
    }

    public function detailKuotaODL($id){
        if($id==0){
            return json_encode("-");
        }
        return json_encode(Kelas::find($id)->kuota);
    }
}
