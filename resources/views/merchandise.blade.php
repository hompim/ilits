@extends('layouts.app')

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/merchandise.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')
    <section id="jumbotron" class="d-flex align-items-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-around justify-content-lg-between">
      <div class="d-flex flex-column justify-content-center text-white text-jumbotron">
        <h1 class="mb-2">Merchandise</h1>
        <h3 class="mb-3">Institut Teknologi Sepuluh Nopember</h3>
        <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
      </div>
      <img src="img/merchandise/jumbotron_merch.png" alt="Jumbtoron Icon" class="img-fluid">
    </div>
  </section>

  <section class="body" id="info-unik">
    <section id="merchandise-carousel">
      <div class="container text-white">
        <?php
          $nama = array();
          $gambar = array();
          $link = array();
          for($i=1;$i<=3;$i++){
              $nama[]= $merch[$i] -> nama;
              $gambar[] = "../img/merchandise/".$merch[$i] -> gambar;
              $link[] = "https://www.tokopedia.com/merchandiseilits";
          }
          $n = join(',',$nama);
          $g = join(',',$gambar);
        ?>
        <x-two-side-carousel titles="{{$n}}" texts="Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! |Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! |Cek marketplace ILITS 2022 buat dapetin merchandise yang kece!" images="{{ $g }}" ></x-two-side-carousel>
      </div>
    </section>

    <section id="catalog">
      <div class="container text-white">
        @include("partials.section-header", ["title" => "Katalog Kami!"])
        <div class="row justify-content-center">
        @foreach($merch as $m)
          <div class="col-md-3 m-3 catalog-item">
              <a target="_blank" href="https://www.tokopedia.com/merchandiseilits">
                <img src="../img/merchandise/{{$m->gambar}}" alt="Merchandise" class="img-fluid mb-3">
              </a>
              <div class="text-col-product-merchandise mb-3">
                <a target="_blank" href="https://www.tokopedia.com/merchandiseilits" style="text-decoration:none; color:white"><h4>{{$m->nama}}</h4>
                <h5>{{'Rp.' .number_format($m->harga, 0, '','.') }}</h5></a>
              </div>
          </div>
        @endforeach
        </div>
    </section>
  </section>
@endsection
