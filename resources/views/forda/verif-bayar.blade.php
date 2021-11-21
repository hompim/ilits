@extends('adminlte::page')

@section('title', 'Verifikasi Bukti Bayar')

@section('content_header')
    <h1>Verifikasi Bukti Bayar</h1>
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

              <h4>{{$peserta_terdaftar}}</h4>
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

              <h4>{{$peserta_konfirmasi}}</h4>
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

              <h4>{{$peserta_pending}}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-android-warning"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>

        <!-- Main row -->
        <div class="row">
          <section class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Verifikasi Bukti Pembayaran</h3>

                  <div class="card-tools my-2">
                    <div class="input-group input-group-sm" style="width: 265px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover text-nowrap" id="verif_tabel">
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
                            @foreach ($peserta as $p)
                          <tr>
                            <td>{{$p->nama_lengkap}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->asal_sekolah}}</td>
                            <td>{{$p->no_wa}}</td>
                            <td>{{$p->pilihan_tryout}}</td>
                            <td>
                                <!-- Button trigger modal -->
                                @if ($p->status_bayar=="aktif")
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-check-circle"></i> Terverifikasi
                                </button>
                                @elseif($p->status_bayar=="ditolak")
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-times-circle"></i> Ditolak
                                </button>
                                @else
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#verifikasi_modal">
                                    <i class="fas fa-pencil-alt"></i> Verifikasi
                                </button>
                                @endif
                            </td>
                          </tr>
                          @endforeach
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
    <div class="modal fade" id="verifikasi_modal" tabindex="-1" aria-labelledby="verifikasi_modal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
            <h5 class="modal-title" id="verifikasi_modal">Verifikasi Bukti Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <div class="container">
                <div class="row">
                    <p>Nama: <span>{{$p->nama_lengkap}}</span></p>
                </div>
                <div class="row">
                    <p>Jurusan Tryout: <span>{{$p->pilihan_tryout}}</span></p>
                </div>
                <div class="row">
                    <h6>Bukti Pembayaran:</h6>
                    <img src="{{$p->bukti_bayar?asset('storage/images/bukti_pembayaran/'.Auth::user()->tryoutUser->bukti_bayar):asset('/img/placeholder-image.png')}}" alt="bukti_pembayaran" class="img-fluid">
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center">
                            <button type="button" class="btn btn-danger">Tolak</button>
                        </div>
                        <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center pt-md-0 pt-3">
                            <button type="button" class="btn btn-success">Verifikasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>  <!-- /. Modal -->
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop

@section('js')
<script>
  $(function () {
    $('#verif_tabel').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop

