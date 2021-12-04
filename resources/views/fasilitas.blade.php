@extends('layouts.app')

@section('title')
  <title>Fasilitas</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/fasilitas.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}" />
@endsection

@section('content')
  <section class="d-flex justify-content-center flex-column" id="jumbotron">
    <article class="container text-white">
      <h1 class="mb-2">Fasilitas</h1>
      <h2 class="mb-5">Institut Teknologi Sepuluh Nopember</h2>
      <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id="info-unik">
    <article class="container text-white">
      <x-card-with-floating-header title="Info Unik Buat Kamu!" image="img/fasilitas/info-unik.png"
        text="Masih dalam rangkaian acara Dies Natalis ke-61, Institut Teknologi Sepuluh Nopember (ITS) bersama Nokia dan Indosat Ooredoo meluncurkan ITS 5G Experience Center di Gedung Pusat Robotika yang merupakan salah satu Kawasan Science Technopark (STP) ITS, Kamis (16/9). Selain yang pertama di Indonesia, ITS juga merupakan kampus pertama yang mempunyai 5G Experience Center." />
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id="fasilitas">
    <article class="container text-white">
      @include("partials.section-header", ["title" => "Apa Saja Fasilitas di ITS?"])
      <div class="row mb-5">
        @foreach($fasilitas as $f)
        <div class="col-md mx-3">
          <x-card-with-header title="{{$f->judul}}" image="../img/fasilitas/{{$f->foto}}"
            text="{{$f->deskripsi}}" />
        </div>
        @endforeach
      </div>
    </article>
  </section>
@endsection
