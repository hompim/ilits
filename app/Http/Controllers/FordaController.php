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
        $peserta_pending = DB::table('tryout_user')->where('status_bayar', 'pending')->count();
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
        $peserta_pending = DB::table('tryout_user')->where('status_bayar', 'pending')->count();
        $pesertas = $forda->peserta;

        return view('forda.absensi-forda', [
            'forda' => $forda,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,
            'pesertas' => $pesertas
        ]);
    }
}
