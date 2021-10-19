<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    //
    public function index()
    {
        return view('peserta.index');
    }
    public function UploadPage()
    {
        return view('peserta.uploadpage');
    }
    public function UploadKartu(Request $request)
    {
        $id = Peserta::find(Auth::user()->user->id);
        $id->status = 'pending';
        $id->save();
        $this->validate($request, [
            'kartu_pelajar' => 'required|image|mimes:jpeg,png,jpg|max:4096'
            //'bukti_pembayaran'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $kartu_pelajar = $request->file('kartu_pelajar');

        $kartu_pelajar_name = Carbon::now()->format('Ymd His') . '.jpg';

        if (!Storage::disk('public')->exists('images/kartu_pelajar')) {
            Storage::disk('public')->makeDirectory('images/kartu_pelajar');
        }
        $gambarPelajar = Image::make($kartu_pelajar);
        if ($gambarPelajar->width() > 1280) {
            $img_resize = $gambarPelajar->resize($gambarPelajar->width() * 50 / 100, $gambarPelajar->height() * 50 / 100, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        } else {
            $img_resize = $gambarPelajar->resize($gambarPelajar->width() * 75 / 100, $gambarPelajar->height() * 75 / 100, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        Storage::disk('public')->put('images/kartu_pelajar/' . $kartu_pelajar_name, (string)$img_resize->encode('jpg'), 75);

        // $kartu_pelajar->storeAs('images/kartu_pelajar',$kartu_pelajar_name,'public');


        $peserta = Peserta::find(Auth::user()->user->id);
        $peserta->kartu_pelajar = $kartu_pelajar_name;
        $peserta->save();
        return redirect(route('peserta.upload'))->with(['status' => 'success', 'message' => 'Kartu Pelajar berhasil diupload, mohon menunggu konfirmasi dari forda']);
    }
}
