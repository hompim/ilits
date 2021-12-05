@extends('layouts.app')

@section('title')
<title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/pages/department.css') }}" />
<link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">

<link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/bar-chart.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/simple-three-cards-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/three-cards.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/two-side-carousel.css') }}">
@endsection

@section('content')
<section class="d-flex justify-content-center flex-column" id='jumbotron'>
  <article class="container">
    <div class="left">
      <h1>Departemen<br>{{ $departemen->nama }}</h1>
      <h2 class="my-4">{{ $departemen->fakultas->singkatan }}</h2>
      <x-button-link href='#' isBlur="100px">
        Kenali Lebih Lanjut
      </x-button-link>

    </div>
  </article>
</section>

{{-- fix --}}
<section class="text-white d-flex justify-content-center align-items-center flex-column" id='about'>
    <article class="container" class="row">
        <x-card-with-floating-header title='Kenali Lebih Lanjut!'
        text='{{ $departemen->deskripsi }}'
        image='img/departmen/{{$departemen->foto}}'
      />
    </article>
</section>

{{-- fix --}}
<section class="" id='akreditasi'>
  <div class="container">
    @include('partials.section-header', ['title'=>'Akreditasi Bersaing'])
    <?php
        $title1=$akreditasi[0]->judul;
        $title2=$akreditasi[1]->judul;
        $title3=$akreditasi[2]->judul;
        $text1=$akreditasi[0]->deskripsi;
        $text2=$akreditasi[1]->deskripsi;
        $text3=$akreditasi[2]->deskripsi;
        $gambar1=$akreditasi[0]->foto;
        $gambar2=$akreditasi[1]->foto;
        $gambar3=$akreditasi[2]->foto;
      ?>

    <x-three-cards title1="{{$title1}}" title2="{{$title2}}" title3="{{$title3}}"
      img1="../img/akreditasi/{{$gambar1}}" img2="../img/akreditasi/{{$gambar2}}" img3="../img/akreditasi/{{$gambar3}}"
      text1="{{$text1}}"
      text2="{{$text2}}"
      text3="{{$text3}}" />
  </div>
</section>

{{-- fix --}}
{{-- <section class="d-flex justify-content-center text-center" id="kekekatan">
    <div class="container">
      @include('partials.section-header', ['title'=>'Kekekatan Departemen Terakhir!'])

      <div class="col-lg-8 col-xl-6 offset-lg-2 offset-xl-3 m-auto px-0 row">
        <div class="barchart text-center col-4">
          <x-bar-chart title="SNMPTN" percent="80"/>
        </div>

        <div class="barchart text-center col-4">
          <x-bar-chart title="SBMPTN" percent="50"/>
        </div>

        <div class="barchart text-center col-4">
          <x-bar-chart title="Mandiri" percent="20"/>
        </div>
     </div>

  </div>
</section> --}}

{{-- <section class=" d-flex justify-content-center text-center flex-column" id="fokus-keilmuan">
    <div class="container">
      @include('partials.section-header', ['title'=>'Fokus Keilmuan'])
      <div class="col-11 px-1 px-md-3 col-lg-11 mx-auto">
        <x-simple-three-cards-carousel
        titles="Keamanan Cyber, Anilisi Data, Rekayasa Perangkat Lunak, Keamanan Cyber, Anilisi Data, Rekayasa Perangkat Lunak"
        images="img/departmen/fokusKeilmuan-1.png,img/departmen/fokusKeilmuan-2.png,img/departmen/fokusKeilmuan-3.png,img/departmen/fokusKeilmuan-1.png,img/departmen/fokusKeilmuan-3.png,img/departmen/fokusKeilmuan-2.png"
        />
      </div>

    </div>
</section> --}}

<?php
    $nama = array();
    $deskripsi = array();
    $foto = array();
    foreach($prestasi as $p){
      $nama[] = $p->nama;
      $deskripsi[] = $p->deskripsi;
      $foto[] = "../img/main/".$p->foto;
    }
    $n = join(',',$nama);
    $d = join('|',$deskripsi);
    $f = join(',',$foto);
  ?>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id="prestasi">
    <article class="container">
      @include("partials.section-header", ["title" => "Segudang Prestasi!"])
      <x-three-cards-carousel titles="{{$n}}"
        texts="{{$d}}"
        images="{{$f}}"
        carouselId="MainPrestasiCarousel" />
    </article>
  </section>

<section class="d-flex justify-content-center align-items-center flex-column" id='prospek'>
    <div class="container text-center">
      @include('partials.section-header', ['title'=>'Sesuaikan Prospek'])
      <?php
        $nama = array();
        $foto = array();
        $deskripsi = array();
        $prospeks = $departemen->prospek_kerja;
        foreach($prospeks as $prospek){
          $nama[] = $prospek->nama;
          $foto[] = "../img/prospek/".$prospek->foto;
          $id[] = $prospek->id;
        }
        $n = join(",",$nama);
        $f = join(',',$foto);
        $i = join(',',$id);
      ?>
      <div class="col-10 col-lg-11 mx-auto">
        <x-three-cards-carousel carouselId="idcar" titles="{{ $n }}"
        images="img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png"
        texts="NULL"
         />
      </div>
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      @include('partials.section-header', ['title'=>'Oustanding Figure'])
      <div class="wrapper text-left d-flex align-items-center">
        @foreach($alumni as $a)
        <div class="flex-item">
          <x-figure-image img="../img/main/alumni-1.png" title="{{$a->nama}}" text="{{$a->deskripsi}}"/>
        </div>
        @endforeach
      </div>
    </div>
</section>

<section class="text-center d-flex justify-content-center align-items-center flex-column" id='kegiatan'>
    <article class="container">
      @include('partials.section-header', ['title'=>'Kegiatan Mahasiswa'])
      <?php
        $judul = array();
        $foto = array();
        $deskripsi = array();
        $activities = $departemen->aktivitas_mahasiswa;
        foreach($activities as $activity){
          $judul[] = $activity->judul;
          $foto[] = "../img/aktivitas-mahasiswa/".$activity->foto;
          $deskripsi[] = $activity->deskripsi;
          $id[] = $activity->id;
        }
        $j = join(", ",$judul);
        $f = join(',',$foto);
        $d = join('|',$deskripsi);
        $i = join(',',$id);
      ?>
      <x-two-side-carousel titles='{{ $j }}'
      texts='{{$d}}'
      images="img/departmen/Kegiatan-1.png,img/departmen/Kegiatan-1.png,img/departmen/Kegiatan-1.png" />
      {{-- <x-two-side-carousel titles='Quadratlon, Menguli, Meng-kader'
      texts='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eiu eligendi, tempore vel ipsa! Provident, possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur officia est hic.
      |Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, non! Praesentium sequi madfgjik kjkjnwdflkwmf ,ermwjnf wefkm kmrfgf lm,rgm   wfg rgfnt, repellendus inventore?
      |Lorem ipsum dolor sit amet c, provident voluptatum facilis inventore corporis earum animi dolor obcaecati doloribus quibusdam necessitatibus. Dignissimos, cupiditate optio exp, porro mrum earum laboriosam nisi!'
      images="img/departmen/Kegiatan-1.png,img/departmen/Kegiatan-1.png,img/departmen/Kegiatan-1.png" /> --}}
    </article>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id='fasilitas'>
  <?php
        $judul = array();
        $foto = array();
        $deskripsi = array();
        foreach($fasilitas as $f){
          $judul[] = $f->judul;
          $foto[] = "../img/fasilitas/".$f->foto;
          $deskripsi[] = $f->deskripsi;
        }
        $j = join(", ",$judul);
        $f = join(',',$foto);
        $d = join('|',$deskripsi);
      ?>
    <article class="container">
      <x-carousel-with-floating-header headerTitle='Fasilitas Untuk Semua' titles='{{ $j }}'
        texts='{{ $d }}'
        images='{{ $f }}' />
      </div>
    </article>
@endsection
@push('modals')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush
