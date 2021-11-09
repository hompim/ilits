<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ini Lho ITS! 2022 - Dashboard</title>
    <!-- Icon -->
    <link rel="icon" href="{{asset('dashboard/dist/img/logo.png')}}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('dashboard/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/jqvmap/jqvmap.min.css')}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.css')}}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/daterangepicker/daterangepicker.css')}}" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/summernote/summernote-bs4.min.css')}}" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="
                    preloader
                    flex-column
                    justify-content-center
                    align-items-center
                ">
            <img class="animation__shake" src="dist/img/logo.png" alt="Logo ILITS 2022" height="60" width="60" />
        </div>

        <!-- Navbar -->
        <nav class="
                    main-header
                    navbar navbar-expand navbar-white navbar-light
                ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="user-panel mt-1 mb-2 d-flex">
                        <div class="info">
                            <a href="#" class="d-block">Nama Peserta</a>
                        </div>
                        <div class="image">
                            <img src="dist/img/avatar5.png" class="img-circle elevation-1" alt="User Image" />
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
                <img src="dist/img/logo-with-text.png" alt="Logo ILITS 2022" class="brand-image-xl logo-xl" />
                <img src="dist/img/logo.png" alt="Logo ILITS 2022" class="brand-image-xs logo-xs" style="left: 12px" />
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header"></li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-hand-sparkles"></i>
                                <p>Selamat Datang!</p>
                            </a>
                        </li>
                        <li class="nav-header"></li>
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
                        <div class="col-12">
                            <h1 class="m-0 text-center">Selamat Datang di Tryout Ini Lho ITS! 2022</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <!-- general form elements -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="text-center mt-1">
                                        <span class="p-2 rounded">Data Diri</span>
                                    </h3>
                                </div>

                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="{{ route('peserta.welcome')}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap"
                                                value="{{ $update_peserta->nama_lengkap }}" name="nama_lengkap" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                            <input type="text" class="form-control" id="asal_sekolah"
                                                value="{{ $update_peserta->asal_sekolah }}" name="asal_sekolah" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="kota_kab_asal_sekolah">Kota/Kabupaten Asal Sekolah</label>
                                            <input type="text" class="form-control" id="kota_kab_asal_sekolah"
                                                value="{{ $update_peserta->kota_kab_asal_sekolah }}" name="kota_kab_asal_sekolah"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label for="no_wa">No. Whatsapp</label>
                                            <input type="text" class="form-control" id="no_wa"
                                                value="{{ $update_peserta->no_wa }}" name="no_wa" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="is_pelajar_aktif">Pelajar Aktif</label>
                                            <input type="text" class="form-control" id="is_pelajar_aktif" value="{{ $update_peserta->is_pelajar_aktif }}"
                                                name="is_pelajar_aktif" readonly/>
                                        </div>
                                        <div class="form-group bg-primary rounded pt-3 pb-2">
                                            <h3 class="text-center">Pilihan Tryout</h3>
                                        </div>
                                        <div class="form-group">
                                            <label for="pilihan_tryout">Pilih Tryout</label>
                                            <select name="pilihan_tryout" id="pilihan_tryout" class="form-control" required>
                                                <option value="">Pilih Jenis Tryout</option>
                                                <option value="Saintek">Saintek</option>
                                                <option value="Soshum">Soshum</option>
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="validasi_data" required />
                                            <label class="form-check-label" for="validasi_data">Saya menyatakan bahwa
                                                data yang ada telah benar</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /. card -->
                        </div>
                        <!-- /. col -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy;
                <a href="https://inilho.its.ac.id/">Ini Lho ITS! 2022</a>.</strong>
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
    <script type="text/javascript">
        $(function () {
            $('#validasi_data').on('click', function () {
                $('#nama_lengkap, #asal_sekolah, #kota_kab_asal_sekolah, #no_wa, #pilihan_tryout').attr('disabled', $(this).is(':checked'));
            });
        });
    </script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
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
