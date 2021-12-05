{{-- <!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Form Registrasi</title>

<!-- Icon -->
<link rel="icon" href="{{asset('dashboard/dist/img/logo.png')}}" />

<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" />
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" />
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}" />
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.css')}}" />
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" />
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" />
<!-- summernote -->
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
<!-- My CSS -->
<link rel="stylesheet" href="{{asset('css/auth-main.css')}}" />
<style>
body {
padding-top: 20rem;
}
</style>
</head>

<body>
<!-- Preloader -->
<div class="
            preloader
            flex-column
            justify-content-center
            align-items-center
        ">
<img class="animation__shake" src="{{asset('dashboard/dist/img/logo.png')}}" alt="AdminLTELogo" height="60" width="60" />
</div>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>AdminLTE 3 | Registration Page</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" />
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}" />
</head>

<body class="hold-transition register-page">
<div class="register-box">
<div class="register-logo">
<a href="index2.html"><b>Ini Lho ITS</b>2022</a>
</div>

<div class="card">
<div class="card-body register-card-body">
    <p class="login-box-msg">Daftar akun baru</p>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email')" required placeholder="Email" />
            <x-jet-input-error for="email"></x-jet-input-error>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                name="password" required autocomplete="new-password" placeholder="Kata Sandi"/>
            <x-jet-input-error for="password"></x-jet-input-error>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ketik Ulang Kata Sandi"/>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap"/>
            <x-jet-input-error for="name"></x-jet-input-error>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <!-- Dropdown Provinsi & Kabupaten -->
        <select class="custom-select" style="margin-bottom: 15px" name="provinsi_domisili_id" required autofocus>
            @foreach($provinsi as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
            @endforeach
        </select>
        <br />
        <select class="custom-select" style="margin-bottom: 15px" name=" kab_domisili_id">
            @foreach($kabupaten as $k)
                <option value="{{$k->id}}">{{$k->nama}}</option>
            @endforeach
        </select>
        <br />
        <!-- Akhir Dropdown Provinsi & Kabupaten -->
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-home"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-school"></span>
                </div>
            </div>
        </div>
        <!-- Dropdown kota/kab asal sekolah -->
        <select class="custom-select" style="margin-bottom: 15px" name="kab_sekolah_id">
            @foreach($kabupaten as $k)
                <option value="{{$k->id}}">{{$k->nama}}</option>
            @endforeach
        </select>
        </select>
        <!-- Akhir Dropdown kota/kab asal sekolah-->

        <div class="input-group mb-3">
            <x-jet-input class="{{ $errors->has('nomor_whatsapp') ? 'is-invalid' : '' }}" type="text" name="nomor_whatsapp" :value="old('nomor_whatsapp')" required autofocus autocomplete="nomor_whatsapp" placeholder="Nomor WhatsApp"/>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fab fa-whatsapp"></span>
                </div>
            </div>
        </div>
        <!-- Radio  -->
        <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="is_pelajar_aktif" id="flexRadioDefault1" />
            <label class="form-check-label"  for="flexRadioDefault1">
            Pelajar Aktif
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="0" name="is_pelajar_aktif" id="flexRadioDefault2" checked />
            <label label class="form-check-label"  for="flexRadioDefault2">
            Bukan Pelajar Aktif
            </label>
        </div>
        <br />
        <!-- Akhir radio -->
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Kamu tau ILITS dari mana?" style="padding-bottom: 5rem" name="tau_ilits" />
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-question-circle"></span>
            </div>
            </div>
        </div>

    <div class="row">
    <div class="col-8">
    <div class="icheck-primary">
        <input type="checkbox" id="agreeTerms" name="terms" value="agree" />
        <label for="agreeTerms">
        Saya setuju dengan
        <a href="#">S&K</a>
        </label>
    </div>
    </div>
    <!-- /.col -->
    <div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">
        Daftar
    </button>
    </div>
    <!-- /.col -->
    </div>
    </form>

    <a href="{{ route('login') }}" class="text-center">Saya sudah memiliki akun</a>
</div>
<!-- /.form-box -->
</div>
<!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ini Lho ITS! 2022 - Registration</title>

    <!-- Icon -->
    <link rel="icon" href="{{asset('testfiture/dist/img/logo.png')}}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('testfiture/plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('testfiture/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('testfiture/css/auth-main.css')}}" />
</head>

<body>
    <!-- Preloader -->
    <div class="
                preloader
                flex-column
                justify-content-center
                align-items-center
            ">
        <img class="animation__shake" src="{{asset('testfiture/lambang/Group-7197.png')}}" alt="AdminLTELogo" height="60" width="60" />
    </div>
    <div class="bg besar">
        <div class="bg kecil">
            <div class="bg naga">

                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-slide-nav">
                    <section class="container">
                      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse w-75" id="navbarNavAltMarkup">
                        <div class="close-mobile d-none align-items-center justify-content-between mb-4">
                          <a href="">
                            <img src="{{ asset('img/icons/logo-small.png') }}" class="logo-small" alt="Ini Lho ITS! 2022">
                          </a>
                          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-2x border-0 fa-chevron-left" aria-hidden="true"></i>
                          </button>
                        </div>
                        <div class="mr-auto navbar-nav">
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/home.svg') }}" class="img-responsive img-fluid mr-3" alt="Home">
                            <a class="mx-4 nav-link" href="#">Home</a>
                          </div>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/eventual.svg') }}" class="img-responsive img-fluid mr-3" alt="Eventual">
                            <a class="mx-4 nav-link" href="#">Eventual</a>
                          </div>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/fakultas.svg') }}" class="img-responsive img-fluid mr-3" alt="Fakultas">
                            <a class="mx-4 nav-link" href="#">Fakultas</a>
                          </div>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/prestasi.svg') }}" class="img-responsive img-fluid mr-3" alt="Prestasi">
                            <a class="mx-4 nav-link" href="#">Prestasi</a>
                          </div>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/fasilitas.svg') }}" class="img-responsive img-fluid mr-3" alt="Fasilitas">
                            <a class="mx-4 nav-link" href="#">Fasilitas</a>
                          </div>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/alumni.svg') }}" class="img-responsive img-fluid mr-3" alt="Alumni">
                            <a class="mx-4 nav-link" href="#">Alumni</a>
                          </div>
                          <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icons/beasiswa.svg') }}" class="img-responsive img-fluid mr-3" alt="Beasiswa">
                            <a class="mx-4 nav-link" href="#">Beasiswa</a>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <a class="nav-link" href="#">Masuk</a>
                        </div>
                      </div>
                    </section>
                  </nav>

                <!-- /.navbar -->

                <!-- Section Daftar -->
                <section id="section">
                    <div class="container" id="daftar-container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="login-box">
                                    <h1 class="login-box-msg"><b>Daftarkan Dirimu!</b> </h1>
                                    <br>
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama"
                                                name="name" :value="old('name')" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                name="email" :value="old('email')" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Kata Sandi</label>
                                            <div class="form-label-group input-group">

                                                <input type="password" name="password" id="password" class="form-control" placeholder=""
                                                    required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text mata" onclick="myFunction()">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ulangi_password">Ulangi Kata Sandi</label>
                                            <div class="form-label-group input-group">

                                                <input type="password" name="password_confirmation" id="ulangi_password" class="form-control" placeholder=""
                                                    required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text mata" onclick="myFunction()">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_whatsapp" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="nomor_whatsapp" id="no_whatsapp" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" />
                                        </div>

                                        <!-- Dropdown -->
                                        <div class="form-group">
                                            <label for="provinsi_domisili">Provinsi Domisili</label>
                                            <select class="provinsi_domisili form-control" id="provinsi_domisili"
                                                name="provinsi_domisili_id">
                                                <option value="null"></option>
                                                @foreach($provinsi as $p)
                                                    <option value="{{$p->id}}">{{$p->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kab_domisili">Kabupaten Domisili</label>
                                            <select class="kab_domisili_id form-control" id="kab_domisili"
                                                name="kab_domisili_id">
                                                <option value="null"></option>
                                                @foreach($kabupaten as $k)
                                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" />
                                        </div>
                                        <div class="form-group">
                                            <label for="kota_kab_asal_sekolah">Kabupaten Domisili Sekolah</label>
                                            <select class="kota_kab_asal_sekolah form-control"
                                                id="kota_kab_asal_sekolah" name="kab_sekolah_id">
                                                <option value="null"></option>
                                                @foreach($kabupaten as $k)
                                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Akhir Dropdown -->


                                        <!-- Radio -->
                                        <div>Apakah Kamu Pelajar Aktif?</div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="1" type="radio" name="is_pelajar_aktif"
                                                id="flexRadioDefault1" />
                                            <label class="form-check-label"  for="flexRadioDefault1">
                                                Pelajar Aktif
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="0" type="radio" name="is_pelajar_aktif"
                                                id="flexRadioDefault2" checked />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Tidak
                                            </label>
                                        </div>
                                        <br />
                                        <!-- Akhir radio -->
                                        <div class="mb-3">
                                            <label for="tau_ilits" class="form-label">Kamu tau ILITS dari mana?</label>
                                            <textarea type="text" class="form-control" name="tau_ilits" id="tau_ilits"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="agreeTerms"
                                                        name="terms" value="agree" />
                                                    <label class="saya-yakin" for="agreeTerms">
                                                        Saya yakin, data yang saya
                                                        isikan sudah benar
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <button type="submit" class="btn daftar">
                                                    <h4>Daftar</h4>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Akhir Section -->

                <footer>
                    <strong>Copyright &copy;
                        <a href="https://inilho.its.ac.id/" style="color: lightseagreen">Ini Lho ITS! 2022</a>.</strong>
                    All rights reserved.
                </footer>

                <!-- jQuery -->
                <script src="{{asset('testfiture/plugins/jquery/jquery.min.js')}}"></script>
                <!-- Bootstrap 4 -->
                <script src="{{asset('testfiture/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <!-- AdminLTE App -->
                <script src="{{asset('testfiture/dist/js/adminlte.js')}}"></script>
                <script>
                    function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                    $(".mata").click(function () {
                        $(this).toggleClass("mata-ketutup");
                    })
                </script>
</body>

</html>
