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
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
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
                <header>
                    @include('partials.header')
                </header>
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