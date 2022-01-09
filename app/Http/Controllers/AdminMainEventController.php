<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Forda;
use App\Models\PesertaEvent;
use App\Models\TryoutUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminMainEventController extends Controller
{
    private function headerInfo(){
        $its_fair = PesertaEvent::where('is_its_fair', 1)->count();
        $fnd = PesertaEvent::where('is_fnd', 1)->count();
        $odl = PesertaEvent::where('is_odl', 1)->count();
        $welcome = TryoutUser::all()->count();
        
        return [
            'jml_its_fair' => $its_fair,
            'jml_fnd' => $fnd,
            'jml_odl' => $odl,
            'jml_welcome' => $welcome
        ];
    }

    public function itsFair(){
        $pesertas = Peserta::whereHas('peserta_event', function ($q){
            $q->where('is_its_fair', 1);
        })->get()->sortByDesc('created_at');
        $context = $this->headerInfo();
        $context['pesertas'] = $pesertas;
        
        return view('admin.main-event.its-fair', $context);
    }

    public function fnd(){
        $pesertas = Peserta::whereHas('peserta_event', function ($q){
            $q->where('is_fnd', 1);
        })->get()->sortByDesc('created_at');
        $context = $this->headerInfo();
        $context['pesertas'] = $pesertas;

        return view('admin.main-event.fnd', $context);
    }

    public function odl(){
        $pesertas = Peserta::whereHas('peserta_event', function ($q){
            $q->where('is_odl', 1);
        })->get()->sortByDesc('created_at');
        $context = $this->headerInfo();
        $context['pesertas'] = $pesertas;

        return view('admin.main-event.odl', $context);
    }

    public function welcome(){
        $jumlahForda = DB::select("SELECT COUNT(tryout_user.id) as jumlah, E.forda_nama, E.forda_id
        FROM users
        INNER JOIN tryout_user
        ON users.id=tryout_user.user_id
        INNER JOIN (SELECT peserta.id as peserta_id, forda.nama as forda_nama, forda.id as forda_id
        FROM peserta
        INNER JOIN forda
        ON peserta.forda_id=forda.id) E
        ON E.peserta_id=users.user_id
        GROUP BY E.forda_id");

        $context = $this->headerInfo();
        $context['jumlahForda'] = $jumlahForda;
    
        return view('admin.main-event.welcome', $context);
    }

    public function welcomeAll(){
        $pesertas = User::with(["user"])
            ->has('tryoutUser')
            ->get()->sortByDesc('created_at');
        $context = $this->headerInfo();
        $context['pesertas'] = $pesertas;
    
        return view('admin.main-event.welcome-all', $context);
    }


    public function welcomeForda($id){
        $forda = Forda::find($id);
        $peserta_konfirmasi = User::whereHas('peserta', function($q) use($forda){
            $q->where('forda_id', $forda->id);
        })
        ->whereHas('tryoutUser', function($q){
            $q->where('status_bayar', 'aktif');
        })->count();
        $pesertas = User::with(["tryoutUser", "user"])
            ->whereHas('peserta', function($q) use($id){
                $q->where('forda_id', $id);
            })
            ->has('tryoutUser')
            ->get()->sortByDesc('created_at');
        $context = $this->headerInfo();
        $context['pesertas'] = $pesertas;
        $context['forda'] = $forda;
        $context['jumlah'] = $peserta_konfirmasi;

        return view('admin.main-event.welcome-detail', $context);
    }

}
