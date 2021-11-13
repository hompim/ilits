<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ini Lho ITS! 2022 - Dashboard</title>
  <!-- Icon -->
  <link rel="icon" href="{{asset('dashboard/dist/img/logo.png')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dashboard/dist/img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <div class="user-panel mt-1 mb-2 d-flex">
            <div class="info">
              <a href="#" class="d-block">{{Auth::user()->user->nama_lengkap}}</a>
            </div>
            <div class="image">
              <img src="{{asset('dashboard/dist/img/avatar5.png')}}" class="img-circle elevation-1" alt="User Image">
            </div>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link logo-switch">
      <img src="{{asset('dashboard/dist/img/logo-with-text.png" alt="Logo ILITS 2022" class="brand-image-xl logo-xl')}}">
      <img src="{{asset('dashboard/dist/img/logo.png" alt="Logo ILITS 2022" class="brand-image-xs logo-xs" style="left: 12px')}}">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header"></li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Upload Bukti Bayar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Presensi
                <span class="right badge badge-danger"> 1</span>
              </p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
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
                <p class="m-0"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Anda belum belum mengunggah bukti pembayaran. Silahkan lakukan upload bukti Pembayaran</p>
              </div>
            </div>
          </section>
        </div>
        <!-- /. warning row -->

        <!-- Main row -->
        <div class="row">
          <section class="col-12">
            <div class="card elevation-2">
              <div class="card-header">
                <h1 class="card-title">
                  Selamat datang, {{Auth::user()->user->nama_lengkap}}
                </h1>
              </div>
              <div class="card-body">
                <p>
                  Untuk bertanya mengenai tryout, hubungi contact person berikut :
                </p>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-2 col-sm-3 col-6">
                        Nama
                      </div>
                      <div class="col-0">
                        :
                      </div>
                      <div class="col-8">
                        <span><strong> {{Auth::user()->user->forda->tryoutForda->nama_pj}}</strong></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 col-sm-3 col-6">
                        ID Line
                      </div>
                      <div class="col-0">
                        :
                      </div>
                      <div class="col-8">
                        <span><strong>{{Auth::user()->user->forda->tryoutForda->id_line_pj}}</strong></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 col-sm-3 col-6">
                        Whatsapp
                      </div>
                      <div class="col-0">
                        :
                      </div>
                      <div class="col-8">
                        <a href="https://wa.me/xxxxxxxx" target="_blank"><span><strong>{{Auth::user()->user->forda->tryoutForda->hp_pj}}</strong></span></a>
                      </div>
                    </div>
                  </div>
                </p>
              </div>
            </div>
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="https://inilho.its.ac.id/">Ini Lho ITS! 2022</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
