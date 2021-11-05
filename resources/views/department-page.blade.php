@extends('layouts.app')

@section('title')
<title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/pages/department.css') }}" />
<link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/two-side-color-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/carousel-with-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header-and-button.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/two-side-card.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/five-items-grid.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/card-with-floating-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/bar-chart.css') }}">
<link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/simple-three-cards-carousel.css') }}">
@endsection

@section('content')
<section class="d-flex justify-content-center flex-column" id='jumbotron'>
  <article class="container text-black">
    <div class="left">
      <h1 style="font-size: 5rem;">Departemen<br>Teknik Informatika</h1>
      <h2 class="my-4" style="font-size:1.875rem; font-weight:500 ;font-family:gothamMedium">FTEIC/ELECTICS</h2>
      <x-button-link href='#' angle='20deg' colorFrom="#53EA90" colorTo='#3B71C7B2' isBlur="100px">
        Kenali Lebih Lanjut
      </x-button-link>
    </div>
  </article>
</section>

{{-- fix --}}
<section class="text-white d-flex justify-content-center align-items-center flex-column" id='kenali'>
    <article class="container" class="row">
        <x-card-with-floating-header title='Kenali Lebih Lanjut!'
        text='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies massa nisl aliquam purus tortor leo, consectetur pharetra semper. Tristique euismod curabitur tortor dolor. Ultricies massa nisl aliquam purus tortor leo, consectetur pharetra semper. Ultricies massa nisl aliquam purus tortor leo, consectetur pharetra semper. Tristique euismod curabitur tortor dolor.'
        image='img/main/testing.png'
      />
    </article>
</section>

{{-- fix --}}
<section class="d-flex justify-content-center flex-column" id="video-profile">
  <article class="container text-center">
      <div class="container row">
        <div class="col-lg-10 offset-lg-1 px-5" >
          <x-video-embed src="https://www.youtube.com/embed/8iuLXODzL04"/>
        </div>
    </div>
   </article>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='Akreditasi'>
  <div class="container text-center">
    @include('partials.section-header', ['title'=>'Akreditasi Bersaing'])
    <x-three-cards-carousel titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
      images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
      texts="Some quick example text to build on the card title and make up the bulk
      of the
      card's content.|Some quick example text to build on the card title and make up the bulk
      of the
      card's content.|Some quick example text to build on the card title and make up the bulk
      of the
      card's content.|Some quick example text to build on the card title and make up the bulk
      of the
      card's content.|Some quick example text to build on the card title and make up the bulk
      of the
      card's content.|Some quick example text to build on the card title and make up the bulk
      of the
      card's content." />
  </div>
</section>

{{-- fix --}}
<section class="d-flex justify-content-center text-center" id="kekekatan">
    <div class="container">
      @include('partials.section-header', ['title'=>'Kekekatan Departemen Terakhir!'])

      <div class="col-6 offset-3 px-0 row">
        <div class="col-4">
          <x-bar-chart title="SNMPTN" percent="30"/>
        </div>
        
        <div class="barchart text-center col-4">
          <x-bar-chart title="SBMPTN" percent="50"/>
        </div>

        <div class="barchart text-center col-4">
          <x-bar-chart title="Mandiri" percent="20"/>
        </div>
     </div>  

  </div>
</section>

<section class=" d-flex justify-content-center text-center flex-column" id="fokus-keilmuan">
    <div class="container">
      @include('partials.section-header', ['title'=>'Fokus Keilmuan'])
      <div class="container text-center">
        <x-simple-three-cards-carousel 
         titles="Keamanan Cyber, Anilisi Data, Rekayasa Perangkat Lunak, Keamanan Cyber, Anilisi Data, Rekayasa Perangkat Lunak"
         images="img/departmen/fokusKeilmuan-1.png,img/departmen/fokusKeilmuan-2.png,img/departmen/fokusKeilmuan-3.png,img/departmen/fokusKeilmuan-1.png,img/departmen/fokusKeilmuan-3.png,img/departmen/fokusKeilmuan-2.png"
        />
      </div> 
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      @include('partials.section-header', ['title'=>'Segudang Prestasi'])
      <x-three-cards-carousel carouselId="carouselId" titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
        images="img/main/prestasi-1.png,img/main/prestasi-2.png,img/main/prestasi-3.png,img/main/prestasi-1.png,img/main/prestasi-3.png,img/main/prestasi-2.png"
        texts="Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content." />
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      @include('partials.section-header', ['title'=>'Sesuaikan Dengan Prospek Kerja'])
      <x-three-cards-carousel carouselId="carouselId1" titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
        images="img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png,img/departmen/prospek.png"
        texts="Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content." />
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      @include('partials.section-header', ['title'=>'Oustanding Figure'])
      <div class="text-left d-flex flex-row">
        <div class="pr-4">
          <x-figure-image img="img/main/alumni-1.png" title="Tri Rismaharini" text="Menteri Sosial"/>
        </div>
        <div class="px-4">
          <x-figure-image img="img/main/alumni-1.png" title="Tri Rismaharini" text="Menteri Sosial"/>
        </div>
        <div class="px-4">
          <x-figure-image img="img/main/alumni-1.png" title="Tri Rismaharini" text="Menteri Sosial"/>
        </div>
        <div class="px-4">
          <x-figure-image img="img/main/alumni-1.png" title="Tri Rismaharini" text="Menteri Sosial"/>
        </div>
        <div class="pl-4">
          <x-figure-image img="img/main/alumni-1.png" title="Tri Rismaharini" text="Menteri Sosial"/>
        </div>
      </div>
    </div>
</section>

<section class="text-center d-flex justify-content-center align-items-center flex-column" id='faculty-detail'>
    <article class="container">
      @include('partials.section-header', ['title'=>'Kegiatan Mahasiswa'])
      <x-two-side-card title='Quadratlon' text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius
      eligendi, tempore vel
      ipsa! Provident, possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur
      officia
      est hic.' buttonText='Lihat Departemen' />
    </article>
  </section>

<section class="text-white d-flex justify-content-center align-items-center flex-column" id='facility'>
    <article class="container">
      <x-carousel-with-floating-header headerTitle='Fasilitas Untuk Semua' titles='Plaza Prof. Supeno, Graha ITS'
        texts='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies massa nisl aliquam purus tortor leo, consectetur pharetra tortor dolor. Ultricies massa nisl aliquam purus tortor leo, consectetur pharetra semper. Ultricies massa nisl aliquam purus tortor leo, consectetur pharetra semper.
        |Lorem ipsum dolor dolor sis si hsafwfwji weuhfuwh uwhhfuhwe fiwefwi fwiefw ameeh sreii sluca lotss maein erta sit amet consectetur adipisicing elit. Tenetur, doloremque. sdfkjn wefjnweofnw woenfwneff wejnf Eveniet,dolores ad id voluptatibus doloribus quae delectus vitae dolorem, assumenda, quas deserunt? Delectus velit assumenda commodi non hic fugiat quidem veniam, amet dolores vitae quae earum ut eos repellat.'
        images='img/departmen/plaza.png,img/departmen/plaza.png' />
      </div>
    </article>
</section>
@endsection

@section('js')
  <script src="{{ asset('js/components/three-cards-carousel.js') }}" defer></script>
@endsection