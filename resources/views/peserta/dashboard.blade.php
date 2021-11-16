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
                  @if (Auth::user()->tryoutUser->status_bayar != null)
                      Sudah
                  @else
                      Belum
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
          <p class="text-warning">Konfirmasi Email</p>

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
                  {{Auth::user()->tryoutUser->pilihan_tryout}}
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
  <div class="row">
    <section class="col-12">
      <div class="card bg-warning elevation-2">
        <div class="card-body">
          <p class="m-0"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Anda belum belum mengunggah bukti pembayaran. Silahkan lakukan upload bukti Pembayaran</p>
        </div>
      </div>
    </section>
  </div>
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
                  <a href="https://wa.me/62{{Auth::user()->user->forda->tryoutForda->hp_pj}}" target="_blank"><span><strong>0{{Auth::user()->user->forda->tryoutForda->hp_pj}}</strong></span></a>
                </div>
              </div>
            </div>
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
