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
        return view('peserta.welcome');
    }

    public function prosesAbsensi(Request $request)
    {
        $kode_presensi_forda = TryoutForda::find(Auth::user()->forda->tryoutForda->id)->kode_presensi;
        $kode_presensi = $request->kode_presensi;
        $keterangan_absen = $request->keterangan_absen;

        if ($kode_presensi_forda == $kode_presensi) {
            $id = TryoutUser::find(Auth::user()->tryoutUser->id);
            $status_absen = TryoutUser::findOrFail($id);
            if ($status_absen) {
                $status_absen->status_absen = True;
                $status_absen->keterangan_absen = null;
                $status_absen->save();
            }
        }
        if ($keterangan_absen != null) {
            $status_absen = TryoutUser::findOrFail($id);
            if ($status_absen) {
                $status_absen->status_absen = False;
                $status_absen->keterangan_absen = $keterangan_absen;
                $status_absen->save();
            }
        }
    }
    public function storeWelcome(Request $request)
    {
        //update data peserta
        $id = Auth::user()->user_id;
        $update_peserta = Peserta::find($id);
        $update_peserta->nama_lengkap = 'nama_lengkap';
        $update_peserta->asal_sekolah = 'asal_sekolah';
        $update_peserta->kota_kab_asal_sekolah = 'kota_kab_asal_sekolah';
        $update_peserta->no_wa = 'no_wa';
        $update_peserta->save();

        //insert pilihan tryout
        // $pilih_tryout = new TryoutUser;
        // $pilih_tryout->pilihan_tryout = TryoutUser::get('pilihan_tryout');
        // //$pilih_tryout->pilihan_tryout = $request->pilihan_tryout;
        // $pilih_tryout->save();

        // DB::table('tryout_user')->insert([
        //     'pilihan_tryout' => $request->pilihan_tryout
        // ]);

        TryoutUser::create([  // <= the error is Here!!!
            'user_id' => Auth::user()->user->id,
            'pilihan_tryout' => request('pilihan_tryout')
        ]);

        DB::table('peserta')->where('id', Auth::user()->user->id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'asal_sekolah' => $request->asal_sekolah,
            'kab_sekolah_id' => $request->kab_sekolah_id,
            'no_wa' => $request->no_wa
        ]);

        return redirect('/peserta');
    }
}
