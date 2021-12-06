@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/fakultas.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-separated-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-container-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}" />

@endsection

@section('content')

<section class="d-flex justify-content-center flex-column" id="jumbotron">
  <article class="container text-white ">
      <div class="left">
        <h1 class="mb-2">{{$fakultas->nama}}</h1>
        <h2 class="mb-4">{{$fakultas->singkatan}}</h2>
        <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
      </div>
  </article>
</section>

<section class="d-flex justify-content-center flex-column" id="info-unik">
  <article class="container text-white">
    <x-card-with-floating-header title="Kenali Lebih Jauh" image="img/fakultas/{{$fakultas->foto}}"
      text="{{$fakultas->deskripsi}}" />
      <!-- nopal -->
  </article>
</section>

<section class="d-flex justify-content-center flex-column" id="video-profile">
  <article class="container text-center">
      <div class=" mx-auto row">
        <div class="col-lg-10 offset-lg-1 px-lg-5" >
          <x-video-embed src="{{$fakultas->link_video}}"/>
        </div>
    </div>
    </article>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='waktu'>
    <div class="container text-center text-white ">
    @include('partials.section-header', ['title'=>'Waktu Demi Waktu'])
    <?php
      $tahun = array();
      $deskripsi = array();
      $fak = $fakultas->fakultas_sejarah;
      foreach($fak as $f){
        $tahun[] = $f->tahun;
        $deskripsi[] = $f->deskripsi;
      }
      $t = join(",",$tahun);
      $d = join('|',$deskripsi);
    ?>
    <div class="col-10 col-lg-11 mx-auto">
        <x-three-cards-carousel carouselId="idcar" titles="{{ $t }}"
        images="img/fakultas/1960.png,img/fakultas/1976.png,img/fakultas/1987.png,img/fakultas/1960.png,img/fakultas/1976.png,img/fakultas/1987.png"
        texts="{{ $d }}"
        />
    </div>
    </div>
</section>

    <section class="text-white d-flex justify-content-center flex-column" id="virtual-expo">
    <article class="container text-center position-relative">
      <x-map text="Mampir Yuk" href="/"
        src="{{ $fakultas->link_map }}">
        <span>Mampir Yuk!!</span>
        {{-- <a href="" class="d-flex jusitfy-content-center align-items-center text-decoration-none">
          <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
        </a> --}}
      </x-map>
    </article>
  </section>

    <section class="d-flex justify-content-center align-items-center flex-column" id='jurusanmu'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Kenali Jurusanmu!'])
      <?php
        $nama = array();
        $foto = array();
        $deskripsi = array();
        $slug = array();
        $id = array();
        $dep = $fakultas->departemen;
        foreach($dep as $d){
          $nama[] = $d->nama;
          $foto[] = "img/departmen/".$d->foto;
          $id[] = $d->id;
          $slug[] = $d->slug;
        }
        $n = join(",",$nama);
        $f = join(',',$foto);
        $i = join(',',$id);
        $s = join(',',$slug);
      ?>
      <div class="col-lg-11 mx-auto">
        <x-three-cards-container-carousel carouselId="idcar2" titles="{{$n}}" images="{{$f}}" id="{{$i}}" slug="{{$s}}" route="departemen"
         />
      </div>
    </div>
    </section>

    {{-- <section class="d-flex justify-content-center align-items-center flex-column" id='perbandingan'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Perbandingan Dosen-Mahasiswa'])
      <div class=" col-lg-11 mx-auto">

      </div>
    </div>
    </section> --}}

    <section class="d-flex justify-content-center align-items-center flex-column" id='kerja-sama'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Kerja Sama Kami!'])

      <?php
        $fak = $fakultas->fakultas_kerjasama->first();
        $judul= $fak->judul;
        $deskripsi = $fak->deskripsi;
      ?>
      <div class="col-10 col-lg-11 mx-auto">
        <x-two-side-separated-carousel images="img/fakultas/kerja-sama.png,img/fakultas/kerja-sama.png,img/fakultas/kerja-sama.png"
        titles="{{ $judul }}"
        texts="{{ $deskripsi }}"
        carouselId="idcar3"/>
      </div>
    </div>
    </section>
@endsection

@push('modals')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush
