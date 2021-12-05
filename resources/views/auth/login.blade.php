<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Ini Lho ITS! 2022 - Login</title>

        <!-- Icon -->
        <link rel="icon" href="{{asset('dashboard/dist/img/logo.png')}}" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}"
        />
        <!-- icheck bootstrap -->
        <link
            rel="stylesheet"
            href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"
        />
        <!-- My CSS -->
        <link rel="stylesheet" href="{{asset('css/auth-main.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
        <link rel="stylesheet" href="{{ asset('css/partials/header.css') }}">
    </head>

    <body>
        <!-- Preloader -->
        <div
            class="
                preloader
                flex-column
                justify-content-center
                align-items-center
            "
        >
            {{-- <img
                class="animation__shake"
                src="{{asset('dashboard/dist/img/logo.png')}}"
                alt="AdminLTELogo"
                height="60"
                width="60"
            /> --}}
        </div>
            <!-- Header -->
    <header>
        @include('partials.header')
    </header>
        <div class="bg besar">
        <div class="bg kecil" style="margin-top: 8rem">
            <div class="bg naga">
                <!-- Section Login -->
                <section id="section">
                    <div class="container" id="daftar-container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="login-box">
                                    <div class="card-body login-card-body">
                                        <h1 class="login-box-msg"> <b>Login Peserta</b>
                                        </h1>
                                        <br>
                                        <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                    name="email" aria-describedby="emailHelp" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password">Kata Sandi</label>
                                                <div class="form-label-group input-group">

                                                    <input type="password" id="password" class="form-control"
                                                        placeholder="" name="password" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text mata"
                                                            onclick="myFunction()">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="remember" />
                                                        <label class="remember" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <p class=" mb-1">
                                                        @if (Route::has('password.request'))
                                                            <a class="printilan" href="{{ route('password.request') }}"  style="color:#ffffff;"">
                                                            {{ __("Lupa kata sandi?") }}
                                                            </a>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <button type="submit" class="btn masuk">
                                                    <h4>{{ __('Masuk') }}</h4>
                                                </button>
                                            </div>
                                        </form>
                                        <br />
                                        <p class="mb-0">
                                            Kamu belum punya akun?
                                            <a href="{{ route('register') }}" class="printilan text-center"
                                                style="color: lightseagreen">
                                                Daftar di Sini</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- Akhir Section -->

                {{-- <footer>
                <strong>Copyright &copy;
                    <a href="https://inilho.its.ac.id/" style="color: lightseagreen">Ini Lho ITS! 2022</a>.</strong>
                All rights reserved.
                </footer> --}}

        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
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
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
    </body>
</html>
