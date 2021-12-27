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
                            <th>Tanggal Daftar</th>
                            <th>Jurusan Tryout</th>
                            <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($peserta as $p)
                          <tr>
                            <td>{{$p->user->nama_lengkap}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->user->asal_sekolah}}</td>
                            <td>{{$p->user->no_wa}}</td>
                            <td>{{substr($p->tryoutUser->created_at, 0, 10)}}</td>
                            <td class="text-capitalize">{{$p->tryoutUser->pilihan_tryout}}</td>
                            <td class="text-center">
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
                                <button onclick="showDetailBayar({{$p->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#verifikasi_modal">
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
                    <table class="table table-borderless">
                      <tbody class="text-left">
                        <tr>
                          <td>Nama</td>
                          <td id="nama-peserta"></td> 
                        </tr>
                        <tr>
                          <td>Pilihan Tryout</td>
                          <td class="text-capitalize" id="pilihan-tryout"></td>
                        </tr>
                        <tr>
                          <td>Bukti Pembayaran</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="row">
                    <img id="bukti-pembayaran" src="" alt="bukti_pembayaran" class="img-fluid">
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center">
                          <form action="{{ route('forda.tolak-bayar') }}" method="post">
                            @csrf
                            <input type="hidden" id="tolak-id" name="tolak_id">
                            <button type="submit" class="btn btn-danger">Tolak</button>
                          </form>  
                        </div>
                        <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center pt-md-0 pt-3">
                          <form action="{{ route('forda.terima-bayar') }}" method="post">
                            @csrf
                            <input type="hidden" id="terima-id" name="verif_id">
                            <button type="submit" class="btn btn-success">Verifikasi</button>
                          </form>  
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
  function showDetailBayar(id){
    $.ajax({
      url: '/forda/detailBayar/'+id,
      type: 'GET',
      data: {
        id: id
      },
      dataType: "JSON",
      success: function(res) {
        $('#nama-peserta').text(": " + res.user.nama_lengkap);
        $('#pilihan-tryout').text(": " + res.tryout_user.pilihan_tryout);
        res.tryout_user.bukti_bayar?($('#bukti-pembayaran').attr('src', '/storage/images/bukti_pembayaran/' + res.tryout_user.bukti_bayar)):($('#bukti-pembayaran').attr('src', '/img/placeholder-image.png'))
        $('#tolak-id').val(res.tryout_user.id);
        $('#terima-id').val(res.tryout_user.id);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(xhr.responseText);
      },
    });
  }
</script>

<script>
  $(function () {
    $('#verif_tabel').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop

