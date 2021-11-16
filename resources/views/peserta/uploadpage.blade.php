@extends('adminlte::page')

@section('title','Upload Bukti Bayar')

@section('content_header')
<h1>Upload Bukti Bayar</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('message'))
    <div class="alert alert-{{Session::get('status')}}" role="alert">
        {{Session::get('message')}}
    </div>
    @endif
    @if(Auth::user()->user->status=='ditolak')
        <div class="alert alert-danger" role="alert">
            Kartu Pelajar ditolak, silahkan upload ulang
        </div>
    @endif
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
                        <p class="m-0">
                            <i
                                class="
                                    fa fa-exclamation-triangle
                                "
                                aria-hidden="true"
                            ></i>
                            Anda belum belum mengunggah bukti
                            pembayaran. Silahkan lakukan upload
                            bukti Pembayaran
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <!-- /. warning row -->
    </div>
        </div>
    </div>
    <div class="row mt-3">
      <!-- Upload File Bayar -->
@if(Auth::user()->tryoutUser->status_bayar=='pending_pembayaran'||Auth::user()->tryoutUser->status_bayar=='aktif'||Auth::user()->tryoutUser->status_bayar=='tolak_pembayaran'||Auth::user()->tryoutUser->status_bayar == null)
<div class="card elevation-2">
    <div class="card-header">
        <h5 class="card-title">Unggah Bukti Bayar</h5>
        <p class="card-text">
            Foto bukti bayar harus terlihat dengan
            jelas!
        </p>
    </div>
    <form action="{{route('peserta.postupload.bukti')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
            <input type="file" class="form-control-file border" onchange="previewImage()" name="bukti_bayar" required style="cursor: pointer;">
            <img id="frame" src="{{Auth::user()->tryoutUser->bukti_bayar?asset('storage/images/bukti_pembayaran/'.Auth::user()->tryoutUser->bukti_bayar):asset('/img/placeholder-image.png')}}" width="100%"/>
    </div>
    @if(Auth::user()->tryoutUser->status_bayar=='tolak_pembayaran'||!Auth::user()->tryoutUser->bukti_bayar)
    <div class="card-footer text-center">
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
    @endif
    </form>
</div>
@endif

<!-- Akhir File Bayar -->
</div>
</div>
@stop

@section('js')
<script type="text/javascript">
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
@stop

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
@stop