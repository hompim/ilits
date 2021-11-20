@extends('adminlte::page')

@section('title', 'Contact Person')

@section('content_header')
    <h1>Contact Person</h1>
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

              <h4>{{$forda_peserta->nama}}</h4>
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
                <h1 class="card-title">Contact Person</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('forda.edit-pj.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pj">Nama Penanggung Jawab</label>
                        <input type="text" class="form-control" id="nama_pj"
                         value="{{ $forda->nama_pj }}" name="nama_pj"/>
                    </div>
                    <div class="form-group">
                        <label for="hp_pj">Nomor HP</label>
                        <input type="text" class="form-control" id="hp_pj"
                         value="{{ $forda->hp_pj }}" name="hp_pj"/>
                    </div>
                    <div class="form-group">
                        <label for="id_line_pj">ID Line</label>
                        <input type="text" class="form-control" id="id_line_pj"
                         value="{{ $forda->id_line_pj }}" name="id_line_pj" />
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary px-5">Edit</button>
                    </div>
                </form>
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
