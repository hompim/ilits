<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\TryoutUser;
use App\Models\TryoutForda;
use App\Models\Forda;
use App\Models\KotaKab;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PesertaController extends Controller
{

    public function index()
    {
        if(!Auth::user()->tryoutUser){
            return redirect(route('peserta.welcome.register'));
        }
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
    }

    //     $kartu_pelajar = $request->file('kartu_pelajar');

    //     $kartu_pelajar_name = Carbon::now()->format('Ymd His') . '.jpg';

    //     if (!Storage::disk('public')->exists('images/kartu_pelajar')) {
    //         Storage::disk('public')->makeDirectory('images/kartu_pelajar');
    //     }
    //     $gambarPelajar = Image::make($kartu_pelajar);
    //     if ($gambarPelajar->width() > 1280) {
    //         $img_resize = $gambarPelajar->resize($gambarPelajar->width() * 50 / 100, $gambarPelajar->height() * 50 / 100, function ($constraint) {
    //             $constraint->aspectRatio();
    //             $constraint->upsize();
    //         });
    //     } else {
    //         $img_resize = $gambarPelajar->resize($gambarPelajar->width() * 75 / 100, $gambarPelajar->height() * 75 / 100, function ($constraint) {
    //             $constraint->aspectRatio();
    //             $constraint->upsize();
    //         });
    //     }
    //     Storage::disk('public')->put('images/kartu_pelajar/' . $kartu_pelajar_name, (string)$img_resize->encode('jpg'), 75);

    //     // $kartu_pelajar->storeAs('images/kartu_pelajar',$kartu_pelajar_name,'public');


    //     $peserta = Peserta::find(Auth::user()->user->id);
    //     $peserta->kartu_pelajar = $kartu_pelajar_name;
    //     $peserta->save();
    //     return redirect(route('peserta.upload'))->with(['status' => 'success', 'message' => 'Kartu Pelajar berhasil diupload, mohon menunggu konfirmasi dari forda']);
    // }

    public function UploadBukti(Request $request)
    {

        $id = Auth::user()->tryoutUser;
        $id->status_bayar = 'pending_pembayaran';
        $id->save();

        $this->validate($request, [
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg|max:4096'
        ]);
        $bukti_pembayaran = $request->file('bukti_bayar');
        $bukti_pembayaran_name = Carbon::now()->format('YmdHis') . '.jpg';
        if (!Storage::disk('public')->exists('images/bukti_pembayaran')) {
            Storage::disk('public')->makeDirectory('images/bukti_pembayaran');
        }
        $gambarBukti = Image::make($bukti_pembayaran);
        if ($gambarBukti->width() > 1280) {
            $img_resize = $gambarBukti->resize($gambarBukti->width() * 50 / 100, $gambarBukti->height() * 50 / 100, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        } else {
            $img_resize = $gambarBukti->resize($gambarBukti->width() * 75 / 100, $gambarBukti->height() * 75 / 100, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        Storage::disk('public')->put('images/bukti_pembayaran/' . $bukti_pembayaran_name, (string)$img_resize->encode('jpg'), 75);
        $bukti_pembayaran->storeAs('images/bukti_pembayaran', $bukti_pembayaran_name, 'public');

        $peserta = Auth::user()->tryoutUser;
        $peserta->bukti_bayar = $bukti_pembayaran_name;
        $peserta->save();
        return redirect(route('peserta.upload'))->with(['status' => 'success', 'message' => 'Bukti Pembayaran berhasil diupload, mohon menunggu konfirmasi dari forda']);
    }
}
