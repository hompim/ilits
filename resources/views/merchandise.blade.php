@extends('layouts.app')

@section('title')
  <title>Merchandise</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/merchandise.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')
  <section class="d-flex align-items-center" id="jumbotron">
    <div class="container d-flex flex-column justify-content-between text-white">
      <h1>Merchandise</h1>
      <h3>Institut Teknologi Sepuluh Nopember</h3>
      <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
    </div>
  </section>

  <section id="merchandise-carousel">
    <div class="container text-white">
      <x-two-side-carousel titles="Jangan Sampai Kehabisan! 1,Jangan Sampai Kehabisan! 2,Jangan Sampai Kehabisan! 3" texts="Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! 1|Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! 2|Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! 3" images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png" buttonTexts="Beli Sekarang! 1,Beli Sekarang! 2,Beli Sekarang! 3" ></x-two-side-carousel>
    </div>
  </section>

  <section id="catalog">
    <div class="container text-white">
      @include("partials.section-header", ["title" => "Katalog Kami!"])

      {{-- Row 1 --}}
      <div class="row">
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
      </div>

      {{-- Row 2 --}}
      <div class="row">
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
      </div>

      {{-- Row 3 --}}
      <div class="row">
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="img/merchandise/baju1.png" alt="Merchandise" class="img-fluid">
          <div class="text-col-product-merchandise mb-3">
            <h4>Be Brave T-Shirt</h4>
            <h5>Rp. 115.000</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
