@extends('layouts.app')

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/pages/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-color-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/carousel-with-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-card.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/five-items-grid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
@endsection

@section('content')
  <section class="d-flex justify-content-center flex-column" id='jumbotron'>
    <article class="container text-white">
      <div class="col-12 col-md-8 col-lg-6">
        <h1 class='mb-3'>INI LHO <br> ITS! 2022</h1>
        <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, ipsum? Inventore
          eius
          dignissimos</p>
        <x-button-link href='#' angle='20deg' colorFrom="#3b71c7" colorTo='#59d3da'>Kenali
          Lebih
          Lanjut
        </x-button-link>
      </div>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id="about">
    <article class="container text-center text-white">
      <h2 class="mb-4">About</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ducimus dicta earum! Inventore explicabo ipsa
        aliquam excepturi id autem obcaecati sequi! Nemo doloremque voluptatibus veniam temporibus rerum accusamus
        repellat vero.</p>
    </article>
  </section>

<section class="text-white d-flex justify-content-center flex-column" id="virtual-expo">
  <article class="container text-center position-relative">
    <x-map href='/' background='linear-gradient(-45deg, #305ea0 0%, #a562e9 70%, #fff9ee 100%)'
      src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.634595959033!2d112.79273125123773!3d-7.28235067356743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh%20Nopember%20Institute%20of%20Technology%20(ITS)!5e0!3m2!1sen!2sid!4v1633755459057!5m2!1sen!2sid' />
  </article>
</section>
  <section class="text-white d-flex justify-content-center flex-column" id="virtual-expo">
    <article class="container text-center position-relative">
      <x-map text='Virtual Tour ITS' href='/'
        src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.634595959033!2d112.79273125123773!3d-7.28235067356743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh%20Nopember%20Institute%20of%20Technology%20(ITS)!5e0!3m2!1sen!2sid!4v1633755459057!5m2!1sen!2sid' />
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id='general-info'>
    <article class="container text-center text-white">
      <div class="container">
        <h2 class="mb-4">Yuk, Kepoin Kita Lebih Lanjut!</h2>
        <x-two-side-color-carousel title='Web Series ILITS' text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius
                eligendi, tempore vel
                ipsa! Provident, possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur
                officia
                est hic. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores cumque a officia in, quidem error
                voluptatem quo neque'
          images='img/main/web-series.png, img/main/web-series.png, img/main/web-series.png' />
      </div>
    </article>
  </section>

  <section class="text-white d-flex justify-content-center flex-column" id='events'>
    <article class="container">
      <x-carousel-with-header buttonText='Kenali Lebih Lanjut' headerTitle='Ada acara apa aja di ILITS! 2022?'
        titles='Open Campus, Open Campus' texts='lorem ipsumsda|lorem ipsum dolor sit amet'
        images='img/main/open-campus.png,img/main/open-campus.png' />
    </article>
  </section>

  <section class="d-flex justify-content-center align-items-center" id='ongoing-info'>
    <article class="text-white d-flex justify-content-center align-items-center flex-column">
      <h2 class='mb-4 text-center'>Pendaftaran Try Out ILITS! <br> Sudah Dibuka </h2>
      <x-button-link href='#' angle='45deg' colorFrom="#8060C9" colorTo='#59D3DA'>Daftar
      </x-button-link>
    </article>
  </section>

  <section class="d-flex justify-content-center align-items-center flex-column" id='faculty'>
    <article class="container text-center text-white">
      <h2 class="mb-5">Fakultas</h2>
      <div class="flex-wrap p-0 mb-5 d-flex justify-content-center align-items-between">
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Sains dan
          Analitika Data
        </x-button-link>
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Teknologi Industri dan Rekayasa Sistem
        </x-button-link>
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Teknik Sipil, Perencanaan, dan Kebumian
        </x-button-link>
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Teknologi Kelautan
        </x-button-link>
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Teknologi Elektro dan Informatika Cerdas
        </x-button-link>
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Desain Kreatif dan Bisnis Digital
        </x-button-link>
        <x-button-link href='#' angle='-45deg' colorFrom="#ffffff64" colorTo='#ffffff37' isBlur='20px'
          class='px-4 mx-3 my-3'>
          Vokasi
        </x-button-link>
      </div>
    </article>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id='faculty-detail'>
    <article class="container">
      <x-two-side-card title='SAINS DAN ANALITIKA DATA' text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius
              eligendi, tempore vel
              ipsa! Provident, possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur
              officia
              est hic.' buttonText='Lihat Departemen' />
    </article>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id='achievement'>
    <div class="container text-center">
      <h2 class='mb-5'>Prestasi</h2>
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

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id='facility'>
    <article class="container">
      <x-carousel-with-floating-header headerTitle='Fasilitas Apa Saja Yang Ada di ITS' titles='Graha ITS, Graha ITS'
        texts='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius eligendi, tempore vel ipsa! Provident,|possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur officia e'
        buttonText='Kenali Lebih Lanjut' images='img/main/web-series.png,img/main/web-series.png' />
      </div>
    </article>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id='alumnus'>
    <div class="container">
      <h2 class="mb-5 text-center">Siapa Aja sih Alumninya?</h2>
      <div class="row">
        <div class="my-2 col-md-4">
          <div class="relative mb-3">
            <img src="{{ asset('img/main/alumni-1.png') }}" alt="Tri Rismaharini" class='w-100'>
          </div>
          <h4>Tri Rismaharini</h4>
          <span>Menteri Sosial</span>
        </div>
        <div class="my-2 col-md-4">
          <img src="{{ asset('img/main/alumni-2.png') }}" alt="Mohammad Nuh" class='w-100'>
          <h4>Mohammad Nuh</h4>
          <span>Mantan Menteri Pendidikan</span>
        </div>
        <div class="my-2 col-md-4">
          <img src="{{ asset('img/main/alumni-3.png') }}" alt="Cak Lontong" class='w-100'>
          <h4>Cak Lontong</h4>
          <span>Pelawak</span>
        </div>
      </div>
    </div>
  </section>

  <section class="text-white d-flex justify-content-center align-items-center flex-column" id='scholarship'>
    <div class="container">
      <h2 class='mb-4 text-center'>Yuk, Cari Tau Beasiswa di ITS!</h2>
      <x-five-items-grid title='Beasiswa BI, Beasiswa BI, Beasiswa BI, Beasiswa BI, Beasiswa BI' />
    </div>
  </section>
@endsection

@section('js')
  <script src="{{ asset('js/components/three-cards-carousel.js') }}" defer></script>
@endsection
