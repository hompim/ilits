@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-separated-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-container-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pages/fakultas.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}" />
@endsection

@section('content')

<section class="d-flex justify-content-center flex-column" id="jumbotron">
    <article class="container text-white ">
        <div class="left">
            <h1 class="mb-2">Fakultas Teknologi <br> Elektro & Informatika <br> Cerdas</h1>
            <h2 class="mb-4">FTEIC/ELECTICS</h2>
            <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
        </div>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id="info-unik">
    <article class="container text-white">
      <x-card-with-floating-header title="Kenali Lebih Jauh" image="img/fakultas/kenali.png"
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies massa nisl aliquam purus tortor leo, 
        consectetur pharetra semper. Tristique euismod curabitur tortor dolor. Ultricies massa nisl aliquam purus tortor 
        leo, consectetur pharetra semper." />
    </article>
  </section>

    <section class="d-flex justify-content-center align-items-center flex-column" id='waktu'>
        <div class="container text-center text-white ">
        @include('partials.section-header', ['title'=>'Waktu Demi Waktu'])
        <div class="col-11 mx-auto">
            <x-three-cards-carousel carouselId="idcar" titles="1960, 1976, 1987, 1960, 1976, 1987"
            images="img/fakultas/1960.png,img/fakultas/1976.png,img/fakultas/1987.png,img/fakultas/1960.png,img/fakultas/1976.png,img/fakultas/1987.png"
            texts="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.|Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.
            card's content.|Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.|Some quick example text to build on the card title and make up the bulk
            of the
            card's content.|Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.
            card's content.|Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.
            card's content." />
        </div>
        </div>  
    </section>

    <section class="text-white " id='akreditasi'>
        <div class="container">
            @include('partials.section-header', ['title'=>'Akreditasi Bersaing'])
            <x-three-cards title1="BAN-PT 2020" title2="WUR" title3="THE" 
            img1="img/fakultas/ban-pt.png" img2="img/fakultas/wur.png" img3="img/fakultas/the.png"
            text1="Some quick example text to build on the card title and make up the bulk
            of the card's content."
            text2="Some quick example text to build on the card title and make up the bulk
            of the card's content."
            text3="Some quick example text to build on the card title and make up the bulk
            of the card's content" />
        </div>
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

    <section class="d-flex justify-content-center align-items-center flex-column" id='jurusanmu'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Kenali Jurusanmu!'])
      <div class="col-11 mx-auto">
        <x-three-cards-container-carousel carouselId="idcar2" titles="Departemen Teknik Informatika, 
        Departemen Sistem Informasi,Departemen Teknik Komputer,Departemen Teknik Informatika,Departemen Sistem Informasi,Departemen Teknik Komputer"
        images="img/fakultas/departemen.png,img/fakultas/departemen.png,img/fakultas/departemen.png,img/fakultas/departemen.png,img/fakultas/departemen.png,img/fakultas/departemen.png"
         />
      </div>
    </div>  
    </section>

    <section class="d-flex justify-content-center align-items-center flex-column" id='perbandingan'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Perbandingan Dosen & Mahasiswa'])
      <div class="col-11 mx-auto">
        
      </div>
    </div>  
    </section>

    <section class="d-flex justify-content-center align-items-center flex-column" id='kerja-sama'>
    <div class="container text-center text-white ">
      @include('partials.section-header', ['title'=>'Kerja Sama Kami!'])
      <div class="col-11 mx-auto">
        <x-two-side-separated-carousel images="img/fakultas/kerja-sama.png,img/fakultas/kerja-sama.png,img/fakultas/kerja-sama.png"
        titles="Lorem Ipsum dolor sit amet,Lorem Ipsum dolor sit amet,Lorem Ipsum dolor sit amet"
        texts="Lorem ipsum dolor sit amet,  consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.
            card's content | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.
            card's content | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros, erat sit auctor eleifend scelerisque.
            card's content."
        carouselId="idcar3"/>
      </div>
    </div>  
    </section>



@endsection

@push('modals')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endpush