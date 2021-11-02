@extends('layouts.peserta')

@section('content')
<div class="content-wrapper d-flex justify-content-center align-items-center">
    <!-- Main content -->
    <h1>Selamat datang peserta Eskalator Cita</h1>
    <b>
        Hallo, {{Auth::user()->peserta->nama_lengkap}}<br>
        Forda Peserta : {{Auth::user()->peserta->forda->nama}}<br>
        pembayaran : {{Auth::user()->status_bayar}}<br>
        prodi : {{Auth::user()->pilihan_tryout}}<br>

        Name : {{Auth::user()->forda->tryoutForda->nama_pj}}<br>
        ID Line : {{Auth::user()->forda->tryoutForda->id_line_pj}}<br>
        No HP PJ :  {{Auth::user()->forda->tryoutForda->hp_pj}}<br>


    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
