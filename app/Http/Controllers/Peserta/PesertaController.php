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
    public function prosesAbsensi(Request $request)
    {
        $kode_presensi_forda = TryoutForda::find(Auth::user()->forda->tryoutForda->id)->kode_presensi;
        $kode_presensi = $request->kode_presensi;
        $keterangan_absen = $request->keterangan_absen;

        if ($kode_presensi_forda == $kode_presensi) {
            //$id = TryoutUser::find(Auth::user()->tryoutUser->id);
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
    public function welcome()
    {
        $kabupaten = DB::table('kota_kab')
            ->get();
        return view('peserta.welcome', ['kabupaten' => $kabupaten]);
    }

    public function pesertaWelcome(Request $request)
    {
        //update data peserta
        // $update_peserta = Peserta::find(Auth::user()->user->id);

        // $update_peserta->nama_lengkap;
        // $update_peserta->asal_sekolah;
        // $update_peserta->kab_sekolah_id;
        // $update_peserta->no_wa;
        // $update_peserta->save();

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

    // public function UploadKartu(Request $request)
    // {
    //     $id = Peserta::find(Auth::user()->user->id);
    //     $id->status = 'pending';
    //     $id->save();
    //     $this->validate($request, [
    //         'kartu_pelajar' => 'required|image|mimes:jpeg,png,jpg|max:4096'
    //         //'bukti_pembayaran'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);

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
}
