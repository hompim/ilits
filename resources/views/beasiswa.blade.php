@extends('layouts.app')

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/beasiswa.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-container-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/banner-with-corner-header.css') }}">
@endsection

@section('content')
    <section id="jumbotron" class="d-flex align-items-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-around justify-content-lg-between">
      <div class="d-flex flex-column justify-content-center text-white text-jumbotron">
        <h1 class="mb-2">Beasiswa</h1>
        <h3 class="mb-3">Institut Teknologi Sepuluh Nopember</h3>
        <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
      </div>
      <img src="img/beasiswa/jumbotron_beasiswa.png" alt="Jumbtoron Icon" class="img-fluid">
    </div>
  </section>

  <section class="body">
    <section class="d-flex align-items-center" id="info-unik">
      <div class="container text-white">
        <x-card-with-floating-header title="Info Unik Buat Kamu" image="img/main/prestasi-2.png" text="Kesempatan buat berkuliah di Institut Teknologi Sepuluh Nopember terbuka dengan sangat lebar buat siapapun. Buktinya, di ITS ada banyak banget beasiswa yang siap mendukungmu untuk berkuliah disini. Bagi kamu pejuang berkuliah, langsung dicek aja beasiswa yang ada di bawah ini yuk!!"></x-card-with-floating-header>
      </div>
    </section>
  
    <section class="py-5 d-flex justify-content-center align-items-center text-white" id="beasiswa-mitra-its">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 offset-lg-1">
            @include("partials.section-header", ["title" => "Beasiswa Mitra ITS"])
            <br>
            @foreach($beasiswa as $b)
            <x-banner-with-corner-header title="{{$b->nama}}" image="img/main/banner.png" href="https://docs.google.com/spreadsheets/d/1Fn-sQoZr0_qxe2ZjRBD9Altse_ewDp--UVAughZo5Zk/edit#gid=0" />
            <br>
            @endforeach
        </div>
        </div>
      </div>
    </section>
  </section>
@endsection
