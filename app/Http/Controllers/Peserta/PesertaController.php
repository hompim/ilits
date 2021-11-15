<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\TryoutUser;
use App\Models\TryoutForda;
use App\Models\Forda;
use App\Models\KotaKab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{

    public function index()
    {
        return view('peserta.dashboard');
    }
    public function UploadPage()
    {
        return view('peserta.uploadpage');
    }

    public function absen()
    {
        return view('peserta.absensi');
    }

    public function registerWelcome(){
        $peserta = Auth::user()->user;
        $kab = KotaKab::all();

        return view('peserta.welcome', [
            'peserta' => $peserta,
            'kota_kab' => $kab
        ]);
    }

    public function prosesAbsensi(Request $request)
    {
        $kode_presensi_forda = TryoutForda::where('forda_id', Auth::user()->user->forda_id)->kode_presensi;
        $kode_presensi = $request->kode_presensi;
        $keterangan_absen = $request->keterangan_absen;

        if ($kode_presensi!=null&&$kode_presensi_forda == $kode_presensi) {
            $tryout_user = Auth::user()->tryoutUser;
            $tryout_user->status_absen = "hadir";
            $tryout_user->save();
        } else{
            return redirect()->back()->with('error', 'Kode presensi tidak sama');
        }
        if ($keterangan_absen != null) {
            $tryout_user->status_absen = "tidak_hadir";
            $tryout_user->keterangan_absen = $keterangan_absen;
            $tryout_user->save();
        }
    }
    public function storeWelcome(Request $request)
    {
        $peserta = Auth::user()->user;

        //Update data user;
        $peserta->nama_lengkap = $request->nama_lengkap;
        $peserta->asal_sekolah = $request->asal_sekolah;
        $peserta->kab_sekolah_id = $request->kab_sekolah_id;
        $peserta->no_wa = $request->no_wa;
        $peserta->save();

        TryoutUser::create([  // <= the error is Here!!!
            'user_id' => Auth::user()->id,
            'pilihan_tryout' => $request->pilihan_tryout,
            'keterangan_absen' => '-'
        ]);

        return redirect(route('peserta'));
    }
}
