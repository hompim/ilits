@extends('adminlte::page')

@section('title', 'Dashboard Welcome Peserta')

@section('content_header')
<h1>Dashboard Peserta</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-info elevation-2">
        <div class="inner">
          <p class="text-info">Forda</p>

          <h4>{{Auth::user()->user->forda->nama}}</h4>
        </div>
        <div class="icon">
          <i class="ion ion-ios-people"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-success elevation-2">
        <div class="inner">
          <p class="text-success">Pembayaran</p>
              <h4>
                @if (Auth::user()->tryoutUser->status_bayar == 'pending')
                Belum Upload
                @elseif(Auth::user()->tryoutUser->status_bayar == 'pending_pembayaran')
                Pending
                @elseif(Auth::user()->tryoutUser->status_bayar == 'tolak_pembayaran')
                Bukti Ditolak
                @elseif(Auth::user()->tryoutUser->status_bayar == 'aktif')
                Sudah Bayar
                @endif
              <h3>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-warning elevation-2">
        <div class="inner">
          <p style="color: #ffa600">Konfirmasi Email</p>

           <h4>
            @if (Auth::user()->email_verified_at == null)
            Belum
            @else
              Sudah
            @endif
          </h4>
        </div>
        <div class="icon">
          <i class="ion ion-email"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-danger elevation-2">
        <div class="inner">
          <p class="text-danger">Pilihan Tryout</p>
          <h4>
              @if (Auth::user()->tryoutUser->pilihan_tryout != null)
                {{ucfirst(Auth::user()->tryoutUser->pilihan_tryout)}}
              @else
                Belum Memilih
              @endif
          <h4>
        </div>
        <div class="icon">
          <i class="ion ion-ios-paper"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

  <!-- Warning row -->
  @if (Auth::user()->tryoutUser->status_bayar == 'pending')
  <div class="row">
    <section class="col-12">
      <div class="card bg-warning elevation-2">
        <div class="card-body">
          <p class="m-0">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
              Anda belum belum mengunggah bukti
              pembayaran. Silahkan lakukan upload
              bukti Pembayaran
          </p>
        </div>
      </div>
    </section>
  </div>
  @elseif(Auth::user()->tryoutUser->status_bayar == 'pending_pembayaran')
  <div class="row">
    <section class="col-12">
      <div class="card bg-info elevation-2">
        <div class="card-body">
          <p class="m-0">
            <i class="fas fa-check-circle" aria-hidden="true"></i>
              Bukti pembayaran anda sudah terupload.
              Mohon tunggu forda untuk memverifikasi bukti pembayaran anda.
          </p>
        </div>
      </div>
    </section>
  </div>
  @elseif(Auth::user()->tryoutUser->status_bayar == 'tolak_pembayaran')
  <div class="row">
    <section class="col-12">
      <div class="card bg-warning elevation-2">
        <div class="card-body">
          <p class="m-0">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
              Bukti pembayaran anda ditolak. Silahkan upload kembali bukti pembayaran.
          </p>
        </div>
      </div>
    </section>
  </div>
  @elseif(Auth::user()->tryoutUser->status_bayar == 'aktif')
  <div class="row">
    <section class="col-12">
      <div class="card bg-success elevation-2">
        <div class="card-body">
          <p class="m-0">
            <i class="fas fa-check-circle" aria-hidden="true"></i>
              Bukti pembayaran anda telah terverifikasi
          </p>
        </div>
      </div>
    </section>
  </div>
  @endif
  <!-- /. warning row -->

  <!-- Main row -->
  <div class="row">
    <section class="col-12">
      <div class="card elevation-2">
        <div class="card-header">
          <h1 class="card-title">
            Selamat datang, {{Auth::user()->user->nama_lengkap}}
          </h1>
        </div>
        <div class="card-body">
          <p>
            Untuk bertanya mengenai tryout, hubungi contact person berikut :
          </p>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Nama
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong> {{Auth::user()->user->forda->tryoutForda->nama_pj}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  ID Line
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{Auth::user()->user->forda->tryoutForda->id_line_pj}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Whatsapp
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <a href="https://wa.me/{{Auth::user()->user->forda->tryoutForda->hp_pj}}" target="_blank"><span><strong>0{{Auth::user()->user->forda->tryoutForda->hp_pj}}</strong></span></a>
                </div>
              </div>
            </div>
          </p>
        </div>
      </div>
      <div class="card elevation-2">
        <div class="card-header">
          <h1 class="card-title">
            Informasi Pembayaran Tryout
          </h1>
        </div>
        <div class="card-body">
          <p>
            Untuk melakukan pembayaran tryout, dapat melalui informasi yang disebutkan di bawah ini:
          </p>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Nama Rekening
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong> {{Auth::user()->user->forda->tryoutForda->nama_rek}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Nomor Rekening
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{Auth::user()->user->forda->tryoutForda->no_rek}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Nama Bank
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{Auth::user()->user->forda->tryoutForda->nama_bank}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Nominal Biaya
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>Rp {{Auth::user()->user->forda->tryoutForda->biaya}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Keterangan Tambahan
                </div>
                <div class="col-0">
                  :
                </div>
              </div>
              <div class="row my-2">
                <textarea rows="3" class="w-100 p-2" disabled>{{Auth::user()->user->forda->tryoutForda->deskripsi_pembayaran}}</textarea>
              </div>
            </div>
          </p>
        </div>
      </div>
      <div class="card elevation-2">
        <div class="card-header">
          <h1 class="card-title">
            Informasi Pelaksanaan Tryout
          </h1>
        </div>
        <div class="card-body">
          <p>
            Segala informasi yang kamu perlukan untuk melaksanakan welcome
          </p>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Tanggal dan Waktu:
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{Auth::user()->user->forda->tryoutForda->tanggal_welcome." ".Auth::user()->user->forda->tryoutForda->sesi_welcome}}</strong></span>
                </div>
              </div>
            @if (Auth::user()->tryoutUser->status_bayar=='aktif')
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Link Grup Koordinasi
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <a href="{{Auth::user()->user->forda->tryoutForda->grup_koordinasi}}" target="_blank"><strong> {{Auth::user()->user->forda->tryoutForda->grup_koordinasi?'Klik disini':'Menyusul'}}</strong></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Link meet
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <a href="{{Auth::user()->user->forda->tryoutForda->link_meet}}" target="_blank"><strong> {{Auth::user()->user->forda->tryoutForda->link_meet?'Klik disini':'Menyusul'}}</strong></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Username
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{Auth::user()->tryoutUser->username_tryout?Auth::user()->tryoutUser->username_tryout:'Menyusul'}}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Password
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{Auth::user()->tryoutUser->password_tryout?Auth::user()->tryoutUser->password_tryout:'Menyusul'}}</strong></span>
                </div>
              </div>
            </div>
            @endif
          </p>
        </div>
      </div>
    </section>
  </div>
  <!-- /.row (main row) -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop
