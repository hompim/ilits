@extends('adminlte::page')

@section('title', 'Dashboard FND Peserta')

@section('content_header')
<h1>Dashboard Faculty and Departement Day</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div class="container-fluid">
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
            Untuk bertanya mengenai ITS Fair, hubungi contact person berikut :
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
                  <span><strong>Menyusul</strong></span>
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
                  <span><strong>Menyusul</strong></span>
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
                    <span><strong>Menyusul</strong></span>
                  {{-- <a href="https://wa.me/{{Auth::user()->user->forda->tryoutForda->hp_pj}}" target="_blank"><span><strong>0{{Auth::user()->user->forda->tryoutForda->hp_pj}}</strong></span></a> --}}
                </div>
              </div>
            </div>
          </p>
        </div>
      </div>
      <div class="card elevation-2">
        <div class="card-header">
          <h1 class="card-title">
            Informasi ITS Fair
          </h1>
        </div>
        <div class="card-body">
          <p>
            Berikut adalah keperluan umum dalam ITS Fair:
          </p>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Virtual Background
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>Menyusul</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Booklet
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>Menyusul</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                    Link Live Youtube
                </div>
                <div class="col-0">
                    :
                </div>
                <div class="col-8">
                    <span><strong>Menyusul</strong></span>
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
