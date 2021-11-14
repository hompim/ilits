<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Login</title>

        <!-- Icon -->
        <link rel="icon" href="{{asset('dashboard/dist/img/logo.png')}}" />

        <link rel="stylesheet" href="{{asset('css/auth-main.css')}}" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
            crossorigin="anonymous"
        />
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
            <img
                class="animation__shake"
                src="{{asset('dashboard/dist/img/logo.png')}}"
                alt="AdminLTELogo"
                height="60"
                width="60"
            />
        </div>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <meta
                    name="viewport"
                    content="width=device-width, initial-scale=1"
                />
                <title>AdminLTE 3 | Log in</title>

                <!-- Google Font: Source Sans Pro -->
                <link
                    rel="stylesheet"
                    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
                />
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
                <!-- Theme style -->
                <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}" />
            </head>
            <body class="hold-transition login-page">
                <div class="login-box">
                    <div class="login-logo">
                        <a href="index2.html"><b>Ini Lho ITS</b>2022</a>
                    </div>
                    <!-- /.login-logo -->
                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">
                                Masuk untuk membuka akun anda
                            </p>

                            <x-jet-validation-errors class="mb-3 rounded-0" />

                            @if (session('status'))
                                <div class="alert alert-success mb-3 rounded-0" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        name="email"
                                    />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span
                                                class="fas fa-envelope"
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Kata Sandi"
                                        name="password"
                                    />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input
                                                type="checkbox"
                                                id="remember"
                                            />
                                            <label for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-block"
                                        >
                                            {{ __('Log in') }}
                                        </button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            
                            <p class="mb-1">
                                <a href="forgot-password.html"
                                    >Lupa kata sandi</a
                                >
                            </p>
                            <p class="mb-0">
                                <a
                                    href="{{ route('register') }}"
                                    class="text-center"
                                    >Daftar akun baru</a
                                >
                            </p>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
                <!-- /.login-box -->

                <!-- jQuery -->
                <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
                <!-- Bootstrap 4 -->
                <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <!-- AdminLTE App -->
                <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
            </body>
        </html>
    </body>
</html>
