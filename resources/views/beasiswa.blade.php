@extends('layouts.app')

@section('title')
  <title>Beasiswa di ITS!</title>
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
  <section class="d-flex align-items-center" id="jumbotron">
    <div class="container d-flex flex-column justify-content-between text-white">
      <h1>Beasiswa</h1>
      <h3>Institut Teknologi Sepuluh Nopember</h3>
      <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
    </div>
  </section>

  <section class="d-flex align-items-center" id="info-unik">
    <div class="container text-white">
      <x-card-with-floating-header title="Info Unik Buat Kamu" image="img/main/prestasi-2.png" text="Scholarship Yayasan Beasiswa Alumni (YBAI) ITS 2021 merupakan program beasiswa yang dikhususkan bagi mahasiswa ITS yang mengalami kesulitan finansial akibat terdampak pandemi."></x-card-with-floating-header>
    </div>
  </section>

  <section id="beasiswa-its" class="text-white">
    <div class="container">
      @include("partials.section-header", ["title" => "Beasiswa ITS"])
      <br>
      <x-three-cards-container-carousel titles="Yayasan Beasiswa Alumni ITS,Jaring Bibit Prestasi Unggul ITS,Ikatan Komite Mahasiswa ITS,Yayasan Beasiswa Alumni ITS 2,Jaring Bibit Prestasi Unggul ITS 2,Ikatan Komite Mahasiswa ITS 2" images="img/main/prestasi-2.png,img/main/prestasi-2.png,img/main/prestasi-2.png,img/main/prestasi-2.png,img/main/prestasi-2.png,img/main/prestasi-2.png"></x-three-cards-container-carousel>
    </div>
  </section>

  <section class="py-5 d-flex justify-content-center align-items-center text-white" id="beasiswa-mitra-its">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
          @include("partials.section-header", ["title" => "Beasiswa Mitra ITS"])
          <br>
          <x-banner-with-corner-header title="Beasiswa Bank Indonesia" image="img/main/banner.png" href="" />
          <x-banner-with-corner-header title="Djarum Beasiswa Plus" image="img/main/banner.png" href="" />
          <x-banner-with-corner-header title="Beasiswa Baznas" image="img/main/banner.png" href="" />
          <x-banner-with-corner-header title="Beasiswa Bakti BCA" image="img/main/banner.png" href="" />
          <x-banner-with-corner-header title="Paragon Scholarchip" image="img/main/banner.png" href="" />
          <x-banner-with-corner-header title="Beasiswa YAGI" image="img/main/banner.png" />
      </div>
      </div>
    </div>
</section>
@endsection

@push('modals')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush
