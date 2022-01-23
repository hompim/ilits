<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\TryoutUser;
use App\Models\TryoutForda;
use App\Models\Forda;
use App\Models\KotaKab;
use App\Models\FordaDaerah;
use App\Models\VideoPembahasan;
use App\Models\Comments;
use Carbon\Carbon;
use Exception;
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

    public function videoPembahasan()
    {
        return view('peserta.video-pembahasan');
    }

    public function registerWelcome(){
        if(Auth::user()->tryoutUser){
            return redirect(route('peserta'));
        }

        $peserta = Auth::user()->user;
        $kab = KotaKab::all();

        return view('peserta.welcome', [
            'peserta' => $peserta,
            'kota_kab' => $kab
        ]);
    }

    public function prosesAbsensi(Request $request)
    {
        $tryout_user = Auth::user()->tryoutUser;
        $kode_presensi_forda = Auth::user()->user->forda->tryoutForda->kode_presensi;
        $kode_presensi = $request->kode_presensi;
        $keterangan_absen = $request->keterangan_absen;

        if ($kode_presensi!=null) {
            if($kode_presensi_forda == $kode_presensi){
                $tryout_user->status_absen = "hadir";
                $tryout_user->save();
                return redirect()->back()->with([
                    'message' => "Status kehadiran berhasil diubah menjadi hadir",
                    'status' => "success"
                ]);
            } else{
                return redirect()->back()->with([
                    'message' => 'Kode presensi tidak sama',
                    'status' => 'danger'
                ]);
            }
        }
        if ($keterangan_absen != null) {
            $tryout_user->status_absen = "tidak_hadir";
            $tryout_user->keterangan_absen = $keterangan_absen;
            $tryout_user->save();
            return redirect()->back()->with([
                'message' => 'Status kehadiran berhasil diubah',
                'status' => 'success'
            ]);
        }
    }

    public function storeWelcome(Request $request)
    {
        $peserta = Auth::user()->user;
        if(Auth::user()->tryoutUser){
            return redirect(route('peserta'));
        }

        //Update data user;
        $peserta->nama_lengkap = $request->nama_lengkap;
        $peserta->asal_sekolah = $request->asal_sekolah;
        $peserta->kab_sekolah_id = $request->kab_sekolah_id;
        $peserta->no_wa = $request->no_wa;
        $forda_id = $peserta->forda_id;
        if(!TryoutForda::where('forda_id', $forda_id)->count()){
            $id = FordaDaerah::where('kota_kab_id', 3578)->first()->forda_id;
            $peserta->forda_id = $id;
        }
        $peserta->save();

        TryoutUser::create([  // <= the error is Here!!!
            'user_id' => Auth::user()->id,
            'pilihan_tryout' => $request->pilihan_tryout,
            'keterangan_absen' => '-'
        ]);

        return redirect(route('peserta'));
    }

    public function UploadBukti(Request $request)
    {
        $this->validate($request, [
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg|max:4096'
        ]);

        try{
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
            $peserta->status_bayar = 'pending_pembayaran';
            $peserta->bukti_bayar = $bukti_pembayaran_name;
            $peserta->save();
            return redirect(route('peserta.upload'))->with(['status' => 'success', 'message' => 'Bukti Pembayaran berhasil diupload, mohon menunggu konfirmasi dari forda']);
        }
        catch(Exception $e){
            return redirect()->back()-with([
                'message' => 'Bukti bayar gagal diperbarui',
                'status' => 'danger'
            ]);
        }
    }

    public function tanyaJawab()
    {
        $data = DB::table('comments')->where('comments.user_id', '=', Auth::user()->id)->count();
        return view('tanya-jawab', ['data' => $data]);
    }
    public function pembahasan(){
        if(Auth::user()->tryoutUser && Auth::user()->tryoutUser->status_bayar == 'aktif'){
            $pilihan = Auth::user()->tryoutUser->pilihan_tryout;
            $video = VideoPembahasan::where('jenis_tryout',$pilihan)->get();
            return view('peserta.video-pembahasan',[
                'video' => $video
            ]);
        }
        else{
            return redirect(route('peserta.welcome.register'));
        }
    }

    public function chooseVideo($id){
        $pilihan = VideoPembahasan::find($id);
        $res = [
            'id' => $pilihan->id,
            'jenis_tryout' => $pilihan->jenis_tryout,
            'subbab' => $pilihan->subbab,
            'link_video' =>$pilihan->link_video,
        ];
        return json_encode($res);
    }
}
