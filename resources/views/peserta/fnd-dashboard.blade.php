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
            Untuk bertanya mengenai Faculty and Department Day, hubungi contact person berikut :
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
            Informasi Faculty And Department Day
          </h1>
        </div>
        <div class="card-body">
          <p>
            Berikut adalah keperluan umum dan data setiap sesi yang kamu pilih pada faculty and department day:
          </p>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Sesi 1
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>Pengenalan Fakultas</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Sesi 2
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{ $sesis["sesi2"]?$sesis["sesi2"]->nama:"Tidak Memilih" }}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Sesi 3
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{ $sesis["sesi3"]?$sesis["sesi3"]->nama:"Tidak Memilih" }}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Sesi 4
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{ $sesis["sesi4"]?$sesis["sesi4"]->nama:"Tidak Memilih" }}</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-6">
                  Sesi 5
                </div>
                <div class="col-0">
                  :
                </div>
                <div class="col-8">
                  <span><strong>{{ $sesis["sesi5"]?$sesis["sesi5"]->nama:"Tidak Memilih" }}</strong></span>
                </div>
              </div>
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
            </div>
          </p>
        </div>
      </div>
      <div class="card elevation-2">
          <div class="card-header">
          <h1 class="card-title">
              Informasi Sesi 1
          </h1>
          </div>
          <div class="card-body">
              <p>
                  Berikut adalah data sesi 1 pada Faculty and Department Day:
              </p>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-2 col-sm-3 col-6">
                          Sesi 1
                      </div>
                      <div class="col-0">
                          :
                      </div>
                      <div class="col-8">
                          <span><strong>Pengenalan Fakultas</strong></span>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 col-sm-3 col-6">
                          Tanggal, Waktu
                      </div>
                      <div class="col-0">
                          :
                      </div>
                      <div class="col-8">
                          <span><strong>08.00 - 10.00</strong></span>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 col-sm-3 col-6">
                          Link Zoom
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
          </div>
      </div>
      @foreach ($sesis as $i)
        <div class="card elevation-2">
            <div class="card-header">
            <h1 class="card-title">
                Informasi Sesi {{$i->sesi_id}}
            </h1>
            </div>
            <div class="card-body">
                <p>
                    Berikut adalah data sesi {{$i->sesi_id}} pada Faculty and Department Day:
                </p>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Sesi {{$i->sesi_id}}
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>{{$i->nama}}</strong></span>
                        </div>
                    </div>
                    @if($i->sesi_id==2)
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Tanggal, Waktu
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>10.00 - 11.05</strong></span>
                        </div>
                    </div>
                    @elseif($i->sesi_id==3)
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Waktu
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>11.35 - 12.40</strong></span>
                        </div>
                    </div>
                    @elseif($i->sesi_id==4)
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Waktu
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>13.00 - 14.15</strong></span>
                        </div>
                    </div>
                    @elseif($i->sesi_id==5)
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Waktu
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>14.15 - 16.00</strong></span>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Link Zoom
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>{{$i->link_zoom?$i->link_zoom:"Menyusul"}}</strong></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            Breakout Room
                        </div>
                        <div class="col-0">
                            :
                        </div>
                        <div class="col-8">
                            <span><strong>{{$i->br_fnd?$i->br_fnd:"Menyusul"}}</strong></span>
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
                            <span><strong>{{$i->link_youtube?$i->link_youtube:"Menyusul"}}</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    </section>
  </div>
  <!-- /.row (main row) -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop
