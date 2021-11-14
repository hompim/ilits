@extends('adminlte::page')

@section('title', 'Absensi Peserta')

@section('content_header')
    <h1>Absensi Peserta</h1>    
@stop

@section('content')
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
                      {{Auth::user()->user->pilihan_tryout}}
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
                    <p class="m-0"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Anda
                        belum belum mengunggah bukti pembayaran. Silahkan lakukan upload bukti
                        Pembayaran</p>
                </div>
            </div>
        </section>
    </div>
    <!-- /. warning row -->



    <!-- Main row -->
    <div class="row">
        <section class="col-12">
            <!-- Absen -->
            <div class="card elevation-2">
                <div class="card-header">
                    <h2>{{Auth::user()->user->forda->nama}}</h2>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Tanggal : </strong>1 November 2021</p>
                    <p class="card-text"><strong>Waktu : </strong>23.59 - 00.00</p>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#modal_hadir">
                        Hadir
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#modal_tdk_hadir">
                        Tidak Hadir
                    </button>
                </div>
            </div>
            <!-- Akhir Absen -->
        </section>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Hadir -->
<div class="modal fade" id="modal_hadir" data-backdrop="static" data-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-success">
        <h5 class="modal-title" id="staticBackdropLabel">Hadir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i></span>
        </button>
    </div>
    <form action="{{ route('peserta.proses.absen')}}" method="post">
    <div class="modal-body">
            <div class="form-group">
                <label for="kode_presensi">Kode Presensi</label>
                <input type="text" class="form-control" name="kode_presensi" id="kode_presensi"
                    aria-describedby="helpId" placeholder="Isikan kode presensi disini!" pattern="[0-9]" required>
                <small id="helpId" class="form-text text-muted">Isi kode presensi sesuai dengan yang
                    diberikan!</small>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</div>

<!-- Modal Tidak Hadir -->
<div class="modal fade" id="modal_tdk_hadir" data-backdrop="static" data-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-danger">
        <h5 class="modal-title" id="staticBackdropLabel">Tidak Hadir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i></span>
        </button>
    </div>
    <form action="{{ route('peserta.proses.absen')}}" method="post">
    <div class="modal-body">
            <div class="form-group">
                <label for="alasan_tdk_hadir">Alasan tidak hadir</label>
                <textarea class="form-control" name="keterangan_absen" id="alasan_tdk_hadir" rows="3"
                    placeholder="Masukkan alasan ketidakhadiran anda!" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
@stop
