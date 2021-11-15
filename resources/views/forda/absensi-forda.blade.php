@extends('adminlte::page')

@section('title', 'Absensi Peserta')
    
@section('content_header')
    <h1>Absensi Peserta</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
    <div class="container-fluid">
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
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
            <div class="card elevation-2">
              <div class="card-header">
                <h1 class="card-title">Absensi Peserta</h1>
              </div>
              <!-- /.card-header -->
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
                      <td>{{$peserta->nama_lengkap}}</td>
                      <td>{{$peserta->user->email}}</td>
                      <td>{{$peserta->asal_sekolah}}</td>
                      <td>{{$peserta->no_wa}}</td>
                      <td style="text-transform:capitalize">{{$peserta->user->tryoutUser->pilihan_tryout}}</td>
                      @if ($peserta->user->tryoutUser->status_absen==true)
                      <td class="text-success">Hadir</td>    
                      @else
                      <td class="text-danger">Belum Hadir</td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop

@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@stop