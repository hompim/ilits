@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/eventual.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection



@section('content')
  <section class="d-flex justify-content-center flex-column" id="jumbotron">
    <article class="container text-white">
      <h1 class="mb-4">Eventual</h1>
      <h2 class="mb-4">Ini Loh ITS! 2022</h2>
      <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
    </article>
  </section>

  <section class="d-flex justify-content-center align-items-center flex-column" id="event">
    <article class="container text-center text-white mb-5">
      @include('partials.section-header', ["title" => "Ikuti Eventual ILITS! 2022!"])
      <div class="row col-10 m-auto -5">
        <div class="col-lg-4 col-md-6 col-12 mt-4 mx-auto">
          <button type="button" class="text-white border-0 py-3 px-3 w-100 h-100">Open Campus Nirwana Asa</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-4 mx-auto">
          <button type="button" class="text-white border-0 py-3 px-3 w-100 h-100">Welcome</button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-4 mx-auto">
          <button type="button" class="text-white border-0 py-3 px-3 w-100 h-100">Visit</button>
        </div>
        
      </div>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column px-4 px-sm-0" id="tentang">
    <article class="container py-5 text-center text-white d-flex flex-column align-items-center position-relative">
      @include("partials.section-header", ["title" => "Apa itu Open Campus"])
      <p>Open CAMPUS INI LHO ITS! 2021 merupakan sebuah acara pengenalan kehidupan perkuliahan 
        beserta keilmuan, prospek kerja, dan prestasi-prestasi membanggakan yang dimiliki oleh setiap departemen di ITS. Dengan bertemakan "Ruang  Mimpi" diharapkan para peserta dapat memiliki gambaran yang lebih jelas 
        mengenai keilmuan yang akan ditekuni serta semakin termotivasi untuk melangkah ke jenjang perguruan 
        tinggi</p>
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column" id="dokumentasi">
    <article class="container py-5 text-center text-white d-flex flex-column align-items-center position-relative">
      <div class="row">
        <img class="col-lg-6 mb-5 pl-0" src="img/eventual/dokum-1.png" alt="dokum-1">
        <img class="col-lg-6 mb-5 pr-0" src="img/eventual/dokum-2.png" alt="dokum-2">
      </div>
      </article>
  </section>

  <section class="d-flex justify-content-center align-items-center" id="informasi-penting">
    <article class="text-white d-flex justify-content-center align-items-center flex-column">
      <h2 class="mb-4 text-center mb-5 col-10 mx-auto">Ayo, Jangan Lewatkan Keseruan Open Campus ILITS! 2022! </h2>
      <x-button-link href="#" angle="45deg" colorFrom="#8060C9" colorTo="#59D3DA">Daftar
      </x-button-link>
    </article>
  </section>

@endsection
