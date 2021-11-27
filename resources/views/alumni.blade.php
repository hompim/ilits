@extends('layouts.app')

@section('title')
  <title>Alumni</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/alumni.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')

  {{-- Jumbotron --}}
  <section class="d-flex align-items-center" id="jumbotron">
    <div class="container d-flex flex-column justify-content-between text-white">
      <h1>Alumni</h1>
      <h3>Institut Teknologi Sepuluh Nopember</h3>
      <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
    </div>
  </section>

  {{-- Info Unik --}}
  <section class="d-flex align-items-center" id="info-unik">
    <div class="container text-white">
      <x-card-with-floating-header title="Info Unik Buat Kamu" image="img/alumni/alumni-2.png" text=" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit cum dolorum, tenetur officia, aperiam nostrum, tempora architecto eaque vitae voluptas qui corporis. Magnam repudiandae debitis, sit sint totam rem accusantium saepe mollitia alias facilis dolorum error quod tenetur minus sed necessitatibus nulla, nostrum modi nemo animi ex sunt praesentium non? Odit dolorem accusamus illo reiciendis adipisci maiores a officiis eum."></x-card-with-floating-header>
    </div>
  </section>

  <section id="alumni">
    <div class="container text-white">
      @include("partials.section-header", ["title" => "Ikuti Jejak Mereka"])

      {{-- Row 1 --}}
      <div class="row">
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-2">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
      </div>

      {{-- Row 2 --}}
      <div class="row">
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-2">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
      </div>

      {{-- Row 3 --}}
      <div class="row">
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-2">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
      </div>

      {{-- Row 4 --}}
      <div class="row">
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-2">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <img src="img/alumni/alumni-1.png" alt="Ibu Tri Risma" class="img-fluid mb-4">
          <div class="text-list-alumni mb-3">
            <h4>Tri Risma</h4>
            <h5>Mentri Sosial</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
