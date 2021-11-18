<?php

namespace App\Http\Controllers;


use App\Models\Forda;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class FordaController extends Controller
{
    public function index()
    {
        $forda = Auth::user()->user;
        $peserta_konfirmasi = DB::table('tryout_user')->where('status_bayar', 'aktif')->count();
        $peserta_terdaftar = $forda->peserta()->count();
        $peserta_pending = DB::table('tryout_user')->where('status_bayar', 'pending_pembayaran')->count();
        $pesertas = $forda->peserta;
        return view('forda.dashboard', [
            'forda' => $forda,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,
            'pesertas' => $pesertas
        ]);
    }
    public function absensi()
    {
        $forda = Auth::user()->user;
        $peserta_konfirmasi = DB::table('tryout_user')->where('status_bayar', 'aktif')->count();
        $peserta_terdaftar = $forda->peserta()->count();
        $peserta_pending = DB::table('tryout_user')->where('status_bayar', 'pending_pembayaran')->count();
        $pesertas = $forda->peserta;

        return view('forda.absensi-forda', [
            'forda' => $forda,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,
            'pesertas' => $pesertas
        ]);
    }
    public function editBiaya()
    {
        $forda = Auth::user()->user->tryoutForda;
        $forda_peserta = Auth::user()->user;
        $peserta_konfirmasi = DB::table('tryout_user')->where('status_bayar', 'aktif')->count();
        $peserta_terdaftar = $forda_peserta->peserta()->count();
        $peserta_pending = DB::table('tryout_user')->where('status_bayar', 'pending_pembayaran')->count();
        return view('forda.edit-biaya', [
            'forda' => $forda,
            'forda_peserta' => $forda_peserta,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,

        ]);
    }
    public function storeBiaya(Request $request)
    {
        try {
            $forda = Auth::user()->user->tryoutForda;
            $forda->nama_rek = $request->nama_rek;
            $forda->nama_bank = $request->nama_bank;
            $forda->no_rek = $request->no_rek;
            $forda->biaya = $request->biaya;
            $forda->save();
            return redirect()->back()->with([
                'message' => "Data Biaya berhasil diubah",
                'status' => "success"
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'message' => "Data Biaya gagal diubah",
                'status' => "danger"
            ]);
        }
    }
}
