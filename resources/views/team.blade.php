@extends('layouts.app')

@section('title')
  <title>Team di ITS!</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/team.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}">
@endsection

@section('content')
  <section class="d-flex align-items-center" id="jumbotron">
    <div class="container d-flex flex-column justify-content-between">
      <h1>TIM</h1>
      <h3 class="text-white">Institut Teknologi Sepuluh Nopember</h3>
      <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
    </div>
  </section>
  
  <section class="d-flex align-items-center" id="info-unik">
    <div class="container text-white">
      <x-card-with-floating-header title="Info Unik Buat Kamu" image="img/main/prestasi-2.png" text="Tim Robot ITS adalah salah satu tim robot terbaik di Indonesia. Sering memenangkan lomba-lomba yang ada dan terakhir berhasil menjadi juara umum KRI 2020. ITB, UI, UGM bisa jadi lewat kalo lawan ITS, saingan berat adalah poltek batam."></x-card-with-floating-header>
    </div>
  </section>

  <section class="text-white" id="list-team">
    <div class="container">
      @include("partials.section-header", ["title" => "Intip Tim Kebanggan ITS!"])
      <br>
        <div class="row">
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Ichiro" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Bayucakra" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
        </div>
        <div class="row">
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Banyubramantya" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Sapuangin" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
        </div>
        <div class="row">
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Vi-Rose" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="IRIS" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
        </div>
        <div class="row">
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Anargya" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
          <div class="team-card col-12 col-md-6">
            <x-card-with-header title="Nogogeni" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus est distinctio officia maiores qui quae architecto, exercitationem sint amet." image="img/main/prestasi-2.png" color1="#53EA90" color2="#39B0B0" color3="#2076CF"></x-card-with-header>
          </div>
        </div>
    </div>
  </section>
@endsection
