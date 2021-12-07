@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/floating-objects/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-color-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/carousel-with-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header-and-button.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-card.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/five-items-grid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/banner-with-corner-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')
  <section class="d-flex justify-content-center flex-column position-relative" id="jumbotron">
    <article class="container text-white">
      <div class="fo-logo d-flex flex-column align-items-end">
        <img src="{{ asset("img/logo.svg") }}" alt="Ini Lho ITS! 2022" draggable="false" class="img-fluid">
        <img src="{{ asset("img/logo-layer.svg") }}" alt="Layer" draggable="false">
      </div>
      <div class="col-12 d-flex flex-column justify-content-center align-items-start">
        {{-- <h1 class="mb-3">INI LHO <br> ITS! 2022</h1> --}}
        <img src="{{ asset("img/main/main-title.png") }}" alt="Ini Lho ITS! 2022" draggable="false" class="mb-4 img-fluid">
        <x-button-link href="#" angle="20deg" colorFrom="#3b71c7" colorTo="#59d3da">Kenali
          Lebih
          Lanjut
        </x-button-link>
      </div>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id="tentang">
    <article class="container py-5 text-center text-white d-flex flex-column align-items-center position-relative">
      @include("partials.section-header", ["title" => "Apa itu ILITS?"])
      <p>"Kenali Dirimu, Kenali Masa Depanmu, Di Ini Lho ITS! 2022"
        Ini Lho ITS! 2022 membantu calon mahasiswa baru ITS dalam menemukan jurusan yang sesuai minat & bakat yang
        dimilikinya. Ini Lho ITS! 2022 memiliki serangkaian event yang terdiri dari Open Campus, Visit, dan Welcome</p>
    </article>
  </section>

  <section class="text-white d-flex justify-content-center flex-column" id="virtual-expo">
    <article class="container text-center position-relative">
      <x-map text="Virtual Tour ITS" href="/" withLayer="true"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.634595959033!2d112.79273125123773!3d-7.28235067356743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh%20Nopember%20Institute%20of%20Technology%20(ITS)!5e0!3m2!1sen!2sid!4v1633755459057!5m2!1sen!2sid">
        <span>Virtual Expo</span>
        {{-- <a href="" class="d-flex jusitfy-content-center align-items-center text-decoration-none">
          <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
        </a> --}}
      </x-map>
    </article>
  </section>

  {{-- <section class="d-flex justify-content-center flex-column" id="informasi-umum">
    <article class="container text-white">
      <div class="container">
        @include('partials.section-header', ["title" => "Yuk, Kepoin Kita Lebih Lanjut!"])
        <x-two-side-carousel titles="Web Series ILITS,Web Series ILITS,Web Series ILITS"
          texts="Seperti apa sih ITS itu? Yuk kenali ITS lebih dalam dengan cara yang asyik dalam web series ILITS!|Seperti apa sih ITS itu? Yuk kenali ITS lebih dalam dengan cara yang asyik dalam web series ILITS!|Seperti apa sih ITS itu? Yuk kenali ITS lebih dalam dengan cara yang asyik dalam web series ILITS!"
          images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
          buttonTexts="Tonton Sekarang!,Tonton Sekarang!,Tonton Sekarang!" />
      </div>
    </article>
  </section> --}}
  <?php
    $nama = array();
    $deskripsi = array();
    foreach($eventual as $e){
      $nama[] = $e->nama;
      $deskripsi[] = $e->deskripsi;
    }
    $n = join(',',$nama);
    $d = join('|',$deskripsi);
  ?>
  <section class="text-white d-flex justify-content-center flex-column" id="acara">
    <article class="container d-flex flex-column align-items-center">
      <x-carousel-with-header buttonText="Kenali Lebih Lanjut" headerTitle="Ada acara apa aja di ILITS! 2022?"
        titles="{{$n}}"
        texts="{{$d}}"
        images="img/main/open-campus.png,img/main/open-campus.png,img/main/open-campus.png" />
    </article>
  </section>

  {{-- <section class="d-flex justify-content-center align-items-center" id="informasi-penting">
    <article class="text-white d-flex justify-content-center align-items-center flex-column">
      <h2 class="mb-4 text-center">Pendaftaran Try Out ILITS! <br> Sudah Dibuka </h2>
      <x-button-link href="#" angle="45deg" colorFrom="#8060C9" colorTo="#59D3DA">Daftar
      </x-button-link>
    </article>
  </section> --}}

  <section class="d-flex justify-content-center align-items-center flex-column" id="fakultas">
    <article class="container mb-5 text-center text-white">
      {{-- @include('partials.section-header', ["title" => "Kenali Fakultas Impianmu!"]) --}}
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <button type="button" onClick="chooseFakultas(4)" data-target="#fakultasPilihan" class="text-white border-0 py-3 px-3 w-100 h-100">Teknologi Industri dan Rekayasa Sistem</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <button type="button" onClick="chooseFakultas(2)" data-target="#fakultasPilihan" class="text-white border-0 py-3 px-3 w-100 h-100">Sains dan Analitika Data</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <button type="button" onClick="chooseFakultas(6)" data-target="#fakultasPilihan" class="text-white border-0 py-3 px-3 w-100 h-100">Teknik Sipil, Perencanaan, dan Kebumian</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <button type="button" onClick="chooseFakultas(3)" data-target="#fakultasPilihan" class="text-white border-0 py-3 px-3 w-100 h-100">Teknologi Elektro dan Informatika Cerdas</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <button type="button" onClick="chooseFakultas(5)" data-target="#fakultasPilihan" class="text-white border-0 py-3 px-3 w-100 h-100">Teknologi Kelautan</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5">
          <button type="button" onClick="chooseFakultas(1)" data-target="#fakultasPilihan" class="text-white border-0 py-3 px-3 w-100 h-100">Desain Kreatif dan Bisnis Digital</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mx-auto">
          <button type="button" onClick="chooseFakultas(7)" data-target="#fakultasPilihan" class="text-white border-0 w-100 h-100 px-3">Vokasi</button>
        </div>
      </div>
    </article>

    <article id="fakultasPilihan" class="container text-white d-flex flex-column align-items-center mt-5">
      <x-two-side-card id="sneakpeek" title="{{$fakultas[0]->nama}}"
        text="{{$fakultas[0]->deskripsi}}"
        image="{{$fakultas[0]->foto}}"
        link="../fakultas/{{$fakultas[0]->slug}}"
        buttonText="Lihat Departemen"/>
    </article>
  </section>

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

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id="fasilitas">
    <article class="container d-flex flex-column align-items-center">
    <?php
    $nama = array();
    $deskripsi = array();
    $foto = array();
    foreach($fasilitas as $f){
      $nama[] = $f->judul;
      $deskripsi[] = $f->deskripsi;
      $foto[] = "../img/fasilitas/".$f->foto;
    }
    $n = join(',',$nama);
    $d = join('|',$deskripsi);
    $f = join(',',$foto);
  ?>
      <x-carousel-with-floating-header-and-button headerTitle="Fasilitas Apa Saja Yang Ada di ITS"
        titles="{{$n}}"
        texts="{{$d}}"
        buttonText="Kenali Lebih Lanjut" 
        images="{{$f}}" 
        routeTo="{{route('fasilitas')}}"
        />
      </div>
    </article>
  </section>

  {{-- <section class="text-white d-flex justify-content-center align-items-center flex-column" id="tim-its">
    <article class="container">
      @include('partials.section-header', ["title" => "Kenalan dengan Tim di ITS!"])
      <x-three-cards title1="Bayucaraka" title2="Ichiro" title3="Sapu Angin" img1="img/main/prestasi-1.png"
        img2="img/main/prestasi-2.png" img3="img/main/prestasi-3.png" :list1="array('Juara 1 Mobil terbang','
          Juara 2 Mobil terbang cepat','
          Juara 3 Mobil terbang stabil','
          Juara 4 Mobil terbang nasional')" :list2="array('Juara 1 Mobil terbang','
          Juara 2 Mobil terbang cepat','
          Juara 3 Mobil terbang stabil','
          Juara 4 Mobil terbang nasional')" :list3="array('Juara 1 Mobil terbang','
          Juara 2 Mobil terbang cepat','
          Juara 3 Mobil terbang stabil','
          Juara 4 Mobil terbang nasional')" />
      <x-button-link href="" class="mx-auto mt-4">Intip Tim Lainnya!</x-button-link>
    </article>
  </section> --}}

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id="alumni">
    <article class="container">
      @include('partials.section-header', ["title" => "Jadilah Penerus Mereka!"])
      <div class="container row">
        @foreach($alumni as $a)
        <div class="col-lg">
          <x-figure-image img="img/main/alumni-1.png" title="{{$a->nama}}" text="{{$a->deskripsi}}" />
        </div>
        @endforeach
      </div>
    </article>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id="beasiswa">
    <article class="container">
      {{-- @include('partials.section-header', ["title" => "Pilihan Beasiswa Untukmu!"]) --}}
      @foreach($beasiswa as $b)
      <x-banner-with-corner-header title="{{$b->nama}}" image="img/main/banner.png" href="https://docs.google.com/spreadsheets/d/1Fn-sQoZr0_qxe2ZjRBD9Altse_ewDp--UVAughZo5Zk/edit#gid=0" />
      @endforeach
    </article>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id="sponsor">
    <article class="container">
      @include('partials.section-header', ["title" => "Sponsor & Media Partner"])
      <div class="p-5 text-center w-100">
        <img class="p-5 w-75" src="{{asset('/img/sponsor/ln.png')}}" alt="Lulus Negeri">
      </div>
    </article>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('js/components/map.js') }}" defer></script>
  <script>
      function chooseFakultas(id) {
      $.ajax({
        url: '../choose-fakultas/'+id,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          $('div.text-left > a#fakultas-tombol').attr("href","../fakultas/"+res.slug);
          $('#fakultas-pilihan-image').attr("src","../img/fakultas/"+res.foto);
          $('#fakultas-pilihan-image').attr("alt",res.nama);
          $('#fakultas-pilihan-judul').text(res.nama);
          $('#fakultas-pilihan-deskripsi').text(res.deskripsi);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
      }
  </script>
@endpush
