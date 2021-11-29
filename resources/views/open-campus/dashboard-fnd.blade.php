@extends('open-campus.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/open-campus/dashboard-fnd.css') }}" />
@endsection


@section('open-campus-content')
    <!-- header section start -->
    <header class="header-content">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-center">Sesi 1 (08.00 - 10.00 WIB)</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="SectionHeader">
                        <div class="container-fluid">
                            <h2 class="px-5 py-2 m-auto bg-info position-relative">
                                Pengenalan Fakultas
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <p class="text-center px-4 header-text">
                        Sesi Fakultas merupakan pemaparan Fakultas yang ada di ITS secara
                        umum. Di dalamnya juga dipaparkan mengenai departemen atau jurusan
                        yang ada di masing-masing fakultas. Sesi ini bersifat wajib
                        diikuti oleh seluruh peserta.
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <main class="main-content">
        <!-- fakultas section start -->
        <section class="fakultas">
            <div class="container">
                <div class="row my-5">
                    <div class="
                col-lg-4
                text-center
                d-flex
                align-self-stretch
                justify-content-center
                my-lg-0
                my-3
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        TEKNOLOGI ELEKTRO DAN INFORMATIKA CERDAS (ELECTICS)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="
                col-lg-4
                text-center
                d-flex
                align-self-stretch
                justify-content-center
                my-lg-0
                my-3
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        SAINS DAN ANALITIKA DATA (SCIENTICS)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="
                col-lg-4
                text-center
                d-flex
                align-self-stretch
                justify-content-center
                my-lg-0
                my-3
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        TEKNOLOGI INDUSTRI DAN REKAYASA SISTEM (INDSYS)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="
                col-lg-4
                text-center
                d-flex
                align-self-stretch
                justify-content-center
                my-lg-0
                my-3
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        TEKNOLOGI KELAUTAN (MARTECH)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="
                col-lg-4
                text-center
                d-flex
                align-self-stretch
                justify-content-center
                my-lg-0
                my-3
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        TEKNIK SIPIL, PERENCANAAN, DAN KEBUMIAN (CIVPLAN)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="
                col-lg-4
                text-center
                d-flex
                align-self-stretch
                justify-content-center
                my-lg-0
                my-3
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        DESAIN KREATIF DAN BISNIS DIGITAL (CREABIZ)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="
                col-12
                text-center
                d-flex
                align-self-stretch
                justify-content-center
              ">
                        <a href="#" class="link-fakultas">
                            <div class="card" style="width: 20rem">
                                <div class="card-body d-flex flex-column ">
                                    <img src="{{ asset('img/fakultas/departemen.png') }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title">
                                        VOKASI (VOCATIONS)
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- fakultas end -->

        <!-- daftar departemens sections start -->
        <section class="daftar-departemen">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="text-center">Apakah kamu ingin lanjut mendaftar sesi departemen?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center py-2">
                        <a href="#" class="btn-ya d-inline-block text-center">Ya</a>
                    </div>
                    <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center py-2">
                        <button type="button" class="btn-tidak" data-toggle="modal" data-target="#konfirmasi-departemen">
                            Tidak
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- daftar departemen end -->
    </main>


    <!-- Modal start-->
    <div class="modal fade" id="konfirmasi-departemen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <div class="row py-3">
                        <div class="col text-center">
                            <p class="modal-text">
                                Apakah kamu yakin tidak mendaftar sesi departemen?
                                Jika yakin, maka kamu hanya mengikuti sesi Pengenalan Fakultas
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn-pilih-ulang" data-dismiss="modal">Pilih Ulang</button>
                        </div>
                        <div class="col">
                            <form action="#">
                                <button type="submit" class="btn-saya-yakin">Saya Yakin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- modal end -->

@endsection


