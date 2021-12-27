@extends('adminlte::page')

@section('title', 'Dashboard Forda')

@section('content_header')
    <h1>Info welcome Forda</h1>
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
              <th>Nama Forda</th>
              <th>Jumlah Peserta</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($jumlahForda as $i)
              <tr>
                <td>{{$i->forda_nama}}</td>
                <td>{{$i->jumlah}}</td>
                <td class="text-center">                                
                    <a type="button" class="btn btn-info" href="{{ route('admin.welcome-detail', ['id'=>$i->forda_id]) }}">
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@stop