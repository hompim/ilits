<?php

namespace App\Http\Controllers;


use App\Models\Forda;
use App\Models\Peserta;
use App\Models\TryoutUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class FordaController extends Controller
{
    public function index()
    {
        $forda = Auth::user()->user;
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'aktif');
            })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        $pesertas = User::with(["tryoutUser", "user"])
            ->whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')
            ->get()->sortByDesc('created_at');
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
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'aktif');
            })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        $pesertas = User::with(["tryoutUser", "user"])
            ->whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')
            ->get();

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
        $forda = Auth::user()->user;
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'aktif');
            })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        $forda = Auth::user()->user->tryoutForda;
        $forda_peserta = Auth::user()->user;
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
            $forda->deskripsi_pembayaran = $request->deskripsi_pembayaran;
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
    public function editPJ()
    {
        $forda = Auth::user()->user;
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'aktif');
            })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        $forda = Auth::user()->user->tryoutForda;
        $forda_peserta = Auth::user()->user;
        return view('forda.edit-pj', [
            'forda' => $forda,
            'forda_peserta' => $forda_peserta,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,

        ]);
    }
    public function storePJ(Request $request)
    {
        try {
            $forda = Auth::user()->user->tryoutForda;
            $forda->nama_pj = $request->nama_pj;
            $forda->hp_pj = $request->hp_pj;
            $forda->id_line_pj = $request->id_line_pj;
            $forda->save();
            return redirect()->back()->with([
                'message' => "Data Penanggung Jawab berhasil diubah",
                'status' => "success"
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'message' => "Data Penanggung Jawab gagal diubah",
                'status' => "danger"
            ]);
        }
    }
    public function LinkMeetPage(){
        $forda = Auth::user()->user;
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'aktif');
            })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        return view('forda.edit-link-meet', [
            'forda' => $forda,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,
        ]);
    }

    public function UpdateLinkMeet(Request $request)
    {
        try {
            $forda = Auth::user()->user->tryoutForda;
            $forda->link_meet = $request->link_meet;
            $forda->save();
            return redirect()->back()->with([
                'message' => "Data Link Meet berhasil diubah",
                'status' => "success"
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'message' => "Data  Link Meet gagal diubah",
                'status' => "danger"
            ]);
        }
    }

    public function indexVerifBayar()
    {
        $forda = Auth::user()->user;
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'aktif');
            })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        $peserta = User::with(["tryoutUser", "user"])
            ->whereHas('peserta', function($q) use($forda){
                $q->where('forda_id', $forda->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })
            ->get()->sortByDesc('created_at');
        return view('forda.verif-bayar', [
            'forda' => $forda,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,
            'peserta' => $peserta,
        ]);
    }

    public function verifBayar(Request $request){
        $user = TryoutUser::find($request->verif_id);
        $user->status_bayar = 'aktif';
        $user->save();
        return redirect(route('forda'));
    }

    public function tolakBayar(Request $request){
        $user = TryoutUser::find($request->tolak_id);
        $user->status_bayar = 'tolak_pembayaran';
        $user->save();
        return redirect(route('forda'));
    }

    //API Function
    public function detailBayar($id){
        $forda = Auth::user()->user;
        $tryoutUser = User::with(["tryoutUser", "user" => function($q) use($forda){
            $q->where('forda_id', $forda->id);
        }])->where('id', $id)->first();
        return json_encode($tryoutUser);
    }
    
    
    public function indexEditGrup(){
        $forda_peserta = Auth::user()->user;
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda_peserta){
            $q->where('forda_id', $forda_peserta->id);
        })
        ->whereHas('tryoutUser', function($q){
            $q->where('status_bayar', 'aktif');
        })->count();
        $peserta_terdaftar = User::whereHas('peserta', function($q) use($forda_peserta){
                $q->where('forda_id', $forda_peserta->id);
            })
            ->has('tryoutUser')->count();
        $peserta_pending = User::whereHas('peserta', function($q) use($forda_peserta){
                $q->where('forda_id', $forda_peserta->id);
            })
            ->whereHas('tryoutUser', function($q){
                $q->where('status_bayar', 'pending_pembayaran');
            })->count();
        return view('forda.edit-grup', [
            'forda_peserta' => $forda_peserta,
            'peserta_pending' => $peserta_pending,
            'peserta_terdaftar' => $peserta_terdaftar,
            'peserta_konfirmasi' => $peserta_konfirmasi,
        ]);
    }

    public function storeEditGrup(Request $request){
        try {
            $forda = Auth::user()->user->tryoutForda;
            $forda->grup_koordinasi = $request->grup_koordinasi;
            $forda->save();
            return redirect()->back()->with([
                'message' => "Link grup koordinasi berhasil diubah",
                'status' => "success"
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'message' => "Link grup koordinasi gagal diubah",
                'status' => "danger"
            ]);
        }
    }
}
