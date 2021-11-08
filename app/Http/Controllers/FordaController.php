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
        $forda = Peserta::where('forda_id', Auth::user()->user->id)->get();
        $peserta_konfirmasi = DB::table('tryout_user')->where('status_bayar', 'aktif')->count();
        $peserta_terdaftar = DB::table('peserta')->count();
        $peserta_pending = DB::table('tryout_user')->where('status_bayar', 'pending')->count();
        return view('forda.dashboard', ['forda' => $forda], $peserta_pending, $peserta_terdaftar, $peserta_konfirmasi);
    }
    public function absensi()
    {
        $forda = Peserta::where('forda_id', Auth::user()->user->id)->get();
        return view('forda.absensi-forda', ['forda' => $forda]);
    }
}
