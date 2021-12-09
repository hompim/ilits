@extends('layouts.app')

@section('title')
  <title>Fasilitas</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/fasilitas.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/floating-objects/fasilitas.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}" />
@endsection

@section('content')
  <section class="d-flex justify-content-center flex-column position-relative overflow-hidden" id="jumbotron">
    <img src="{{ asset("img/icons/rec-blue-green-white.svg") }}" alt="Rectangle" draggable="false" class="position-absolute rec">
    <img src="{{ asset("img/icons/circle-green-blue.svg") }}" alt="Circle" draggable="false" class="position-absolute circle">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-1">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-2">
    <article class="container text-white position-relative">
      <img src="{{ asset("img/fasilitas/fasilitas-icon.png") }}" alt="Fasilitas" draggable="false" class="position-absolute logo">
      <img src="{{ asset("img/icons/ring-green-blue.svg") }}" alt="Ring" draggable="false" class="position-absolute ring">
      <h1 class="mb-2">Fasilitas</h1>
      <h2 class="mb-5">Institut Teknologi <br class="d-none"> Sepuluh Nopember</h2>
      <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column position-relative overflow-hidden" id="info-unik">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-1">
    <img src="{{ asset("img/icons/circle-pink.svg") }}" alt="Circle" draggable="false" class="position-absolute circle">
    <article class="container text-white position-relative">
      <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-2">
      <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-3">
      <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-4">
      <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-5">
      <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-6">
      <x-card-with-floating-header title="Info Unik Buat Kamu!" image="img/fasilitas/info-unik.png"
        text="Masih dalam rangkaian acara Dies Natalis ke-61, Institut Teknologi Sepuluh Nopember (ITS) bersama Nokia dan Indosat Ooredoo meluncurkan ITS 5G Experience Center di Gedung Pusat Robotika yang merupakan salah satu Kawasan Science Technopark (STP) ITS, Kamis (16/9). Selain yang pertama di Indonesia, ITS juga merupakan kampus pertama yang mempunyai 5G Experience Center." />
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column position-relative overflow-hidden" id="fasilitas">
    <img src="{{ asset("img/icons/circle-gradation-1.svg") }}" alt="Star" draggable="false" class="position-absolute circle">
    <img src="{{ asset("img/icons/ring-cyan.svg") }}" alt="Star" draggable="false" class="position-absolute ring">
    <article class="container text-white">
      @include("partials.section-header", ["title" => "Apa Saja Fasilitas di ITS?"])
      <div class="row mb-5 d-flex justify-content-center">
        @foreach($fasilitas as $f)
        <div class="col-md-5 mx-3 my-3">
          <x-card-with-header title="{{$f->judul}}" image="../img/fasilitas/{{$f->foto}}"
            text="{{$f->deskripsi}}" />
        </div>
        @endforeach
      </div>
    </article>
  </section>
@endsection
