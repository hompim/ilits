@extends('adminlte::page')

@section('title', 'Link Zoom')

@section('content_header')
    <h1>Link Zoom</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div class="container-fluid">
    @if(Session::has('message'))
  <div class="alert alert-{{Session::get('status')}}" role="alert">
    {{Session::get('message')}}
  </div>
  @endif
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box border-info elevation-2">
            <div class="inner">
              <p class="text-info">Forda</p>

              <h4>{{$forda->nama}}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box border-primary elevation-2">
            <div class="inner">
              <p class="text-primary">Jumlah peserta terdaftar</p>

              <h4>{{(string)$peserta_terdaftar}}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box border-success elevation-2">
            <div class="inner">
              <p class="text-success">Jumlah peserta terkonfirmasi</p>

              <h4>{{(string)$peserta_konfirmasi}}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-ios-checkmark"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box border-warning elevation-2">
            <div class="inner">
              <p class="text-warning">Jumlah peserta pending</p>

              <h4>{{(string)$peserta_pending}}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-android-warning"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{route('forda.link-meet-post')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="link_meet">Masukkan link meet yang akan digunakan pada saat try out nanti</label>
                        <input type="text"
                            class="form-control" name="link_meet" id="link_meet" required value="">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                </form>
            </div>
        </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop
