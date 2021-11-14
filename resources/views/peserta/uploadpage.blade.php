@extends('adminlte::page')

@section('title','Upload Bukti Bayar')

@section('content_header')
<h1>Upload Bukti Bayar</h1>
@stop

@section('content')
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

                        <h4>Surabaya</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div
                    class="small-box border-success elevation-2"
                >
                    <div class="inner">
                        <p class="text-success">Pembayaran</p>

                        <h4>Belum</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div
                    class="small-box border-warning elevation-2"
                >
                    <div class="inner">
                        <p class="text-warning">
                            Konfirmasi Email
                        </p>

                        <h4>Sudah</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-email"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div
                    class="small-box border-danger elevation-2"
                >
                    <div class="inner">
                        <p class="text-danger">
                            Pilihan Tryout
                        </p>

                        <h4>Saintek</h4>
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

        <!-- Upload File Bayar -->
        <div class="card elevation-2">
            <div class="card-header">
                <h5 class="card-title">Unggah Bukti Bayar</h5>
                <p class="card-text">
                    Foto bukti bayar harus terlihat dengan
                    jelas!
                </p>
            </div>
            <form action="#">
            <div class="card-body">
                    <input type="file" class="form-control-file border" onchange="preview()" name="bukti_bayar" required style="cursor: pointer;">
                    <img id="frame" src="" width="100%"/>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">
                    Submit
                </button>
            </div>
            </form>
        </div>

        <!-- Akhir File Bayar -->
    </div>
    </form>
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