@extends('layouts.app')

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/alumni.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')
  <section id="jumbotron" class="d-flex align-items-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-around justify-content-lg-between">
      <div class="d-flex flex-column justify-content-center text-white text-jumbotron">
        <h1 class="mb-2">Alumni</h1>
        <h3 class="mb-3">Institut Teknologi Sepuluh Nopember</h3>
        <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
      </div>
      <img src="img/alumni/jumbotron_alumni.png" alt="Jumbtoron Icon" class="img-fluid">
    </div>
  </section>

  <section class="body">
    <section class="d-flex align-items-center" id="info-unik">
      <div class="container text-white">
        <x-card-with-floating-header title="Info Unik Buat Kamu" image="img/alumni/alumni_info.png" text=" Mulai dari berdirinya pada tahun 1957, Institut Teknologi Sepuluh Nopember Surabaya udah memberikan banyak kontribusinya kepada Indonesia. Salah satunya adalah dengan mencetak alumni yang unggul. Yuk, kenalan sama mereka semua."></x-card-with-floating-header>
      </div>
    </section>

    <section id="alumni">
      <div class="container text-white">
        @include("partials.section-header", ["title" => "Ikuti Jejak Mereka"])
        <div class="row justify-content-center">
          @foreach($alumni as $a)
          <div class="col-sm-4 mb-4 alumni-item">
            <img src="img/alumni/alumni-1.png" alt="{{$a->nama}}" class="img-fluid mb-2">
            <div class="text-list-alumni mb-3 text-center">
              <h4>{{$a->nama}}</h4>
              <h5>{{$a->deskripsi}}</h5>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </section>
@endsection
