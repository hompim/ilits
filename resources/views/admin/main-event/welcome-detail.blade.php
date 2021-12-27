@extends('adminlte::page')

@section('title', 'Dashboard Forda')

@section('content_header')
    <h1>Peserta Welcome {{ $forda->nama }}</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div class="container-fluid my-4">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-info elevation-2">
        <div class="inner">
          <h4 class="text-info">Peserta ITS Fair</h4>

          <h4>{{$jml_its_fair}}</h4>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-info elevation-2">
        <div class="inner">
          <h4 class="text-info">Peserta FnD</h4>

          <h4>{{$jml_fnd}}</h4>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-info elevation-2">
        <div class="inner">
          <h4 class="text-info">Peserta ODL</h4>

          <h4>{{$jml_odl}}</h4>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <!-- col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box border-info elevation-2">
        <div class="inner">
          <h4 class="text-info">Peserta Welcome</h4>

          <h4>{{$jml_welcome}}</h4>
        </div>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

  <!-- Main row -->
  <div class="row">
    <section class="col-12">
      <div class="card elevation-2">
        <div class="card-header">
          <h1 class="card-title">
            Daftar Peserta
          </h1>
        </div>
        <!-- card-body -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Asal Sekolah</th>
              <th>No. Telp</th>
              <th>Jurusan Tryout</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($pesertas as $peserta)
              <tr>
                <td>{{$peserta->user->nama_lengkap}}</td>
                <td>{{$peserta->email}}</td>
                <td>{{$peserta->user->asal_sekolah}}</td>
                <td>{{$peserta->user->no_wa}}</td>
                <td style="text-transform:capitalize">{{$peserta->tryoutUser->pilihan_tryout}}</td>
                <td style="text-transform:capitalize">
                    @if($peserta->tryoutUser->status_bayar=='pending')
                      Belum Melakukan Pembayaran
                    @elseif($peserta->tryoutUser->status_bayar=='pending_pembayaran')
                      Menunggu Verifikasi
                    @elseif($peserta->tryoutUser->status_bayar=='tolak_pembayaran')
                      Bukti Bayar Ditolak
                    @elseif($peserta->tryoutUser->status_bayar=='aktif')
                      Terverifikasi
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /. card-body -->
      </div>
    </section>
  </div>
  <!-- /.row (main row) -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop

@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "ordering":false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@stop