@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/fakultas.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/floating-objects/generalFloating.css') }}" />

  
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

<section class="d-flex justify-content-center flex-column " id="jumbotron">
  <div class="rec rec-fakultas"></div>
  <div class="circle circle-fakultas"></div>
  <div class="ring ring-fakultas"></div>


  <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-1">
  <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-2">
  
  <article class="container text-white mt-5">
      <div class="left col-lg-9 mt-5">
        <h1 class="mb-2">{{$fakultas->nama}}</h1>
        <h2 class="mb-4">{{$fakultas->singkatan}}</h2>
        <x-button-link href="#info-unik">Kenali Lebih Lanjut!</x-button-link>
      </div>
  </article>
  <div class="ilustrasi">
    <img src="../img/fakultas/{{$fakultas->foto_header}}" alt="{{$fakultas->nama}}">
  </div>
</section>

<section class="d-flex justify-content-center flex-column" id="info-unik">
  <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-1 position-absolute">
 <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-1 position-absolute">
 <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-2 position-absolute">
 <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-3 position-absolute">
 <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-4 position-absolute">
 <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-5 position-absolute">
 <img src="{{ asset("img/icons/circle-pink.svg") }}" alt="Circle" draggable="false" class="position-absolute circle">
  <article class="container text-white">
    <x-card-with-floating-header title="Kenali Lebih Jauh" image="img/fakultas/{{$fakultas->foto}}"
      text="{{$fakultas->deskripsi}}" />
      <!-- nopal -->
  </article>
</section>

<section class="d-flex justify-content-center flex-column" id="video-profile">
  <img src="{{ asset("img/icons/circle-gradation-1.svg") }}" alt="Star" draggable="false" class="position-absolute circle">
  <article class="container text-center">
      <div class=" mx-auto row">
        <div class="col-lg-10 offset-lg-1 px-lg-5" >
          <x-video-embed src="{{$fakultas->link_video}}"/>
        </div>
    </div>
    </article>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='waktu'>
  <img src="{{ asset("img/icons/hollow-rec.svg") }}" alt="Hollow rectangle icon" class="hollow-rec position-absolute">
  <img src="{{ asset("img/icons/ring-cyan.svg") }}" alt="Ring icon" class="ring-cyan position-absolute">
      
  <article class="container text-center text-white ">
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
        texts="{{ $d }}"
        />
    </div>
  </article>
</section>

 <section class="text-white d-flex justify-content-center flex-column" id="virtual-expo">
  <img src="{{ asset("img/icons/ring-pink.svg") }}" alt="Ring icon" class="ring-pink position-absolute">  
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
    <img src="{{ asset("img/icons/rec-pink.svg") }}" alt="Ring icon" class="rec-pink position-absolute">  
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-1 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-2 position-absolute">  
    <article class="container text-center text-white ">
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
    </article>
  </section>

    {{-- <section class="d-flex justify-content-center align-items-center flex-column" id='perbandingan'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Perbandingan Dosen-Mahasiswa'])
      <div class=" col-lg-11 mx-auto">

      </div>
    </div>
    </section> --}}

  <section class="d-flex justify-content-center align-items-center flex-column" id='kerja-sama'>
    <img src="{{ asset("img/icons/circle-gradation-2.svg") }}" alt="Circle icon" class="circle position-absolute">  
    <article class="container text-center text-white ">
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
    </article>
  </section>
@endsection
