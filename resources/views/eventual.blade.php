@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/eventual.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/floating-objects/generalFloating.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection
@section('content')
  <section class="d-flex justify-content-center flex-column" id="jumbotron">
    <div class="rec rec-eventual"></div>
    <div class="circle circle-eventual"></div>
    <div class="ring ring-eventual"></div>
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-1">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star" draggable="false" class="position-absolute star-2">
    
    <article class="container text-white">
        <div class="left col-lg-9">
          <h1 class="mb-4">Eventual</h1>
          <h2 class="mb-4">Ini Lho ITS! 2022</h2>
          <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
        </div>
    </article>
    <div class="ilustrasi ">
      <img src="{{ asset('img/eventual/EVENT.png') }}" alt="none">
    </div>
  </section>

  <section class="d-flex justify-content-center align-items-center flex-column" id="event">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-1 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-1 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-2 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-3 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-4 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-5 position-absolute">
    <img src="{{ asset("img/icons/circle-pink.svg") }}" alt="Circle" draggable="false" class="position-absolute circle">
   
    <div class="container container-btn text-center text-white mb-5">
      @include('partials.section-header', ["title" => "Ikuti Eventual ILITS! 2022!"])
      <div class="row col-lg-11 m-auto -5">
        <div class="col-lg-4 col-6 mt-4 mx-auto">
          <button type="button" onClick="chooseEvent(1)" data-target="#tentang" class="text-white border-0 p-2 p-md-3 w-100 h-100">Open Campus Nirwana Asa</button>
        </div>
        <div class="col-lg-4 col-6 mt-4 mx-auto">
          <button type="button" onClick="chooseEvent(2)" data-target="#tentang" class="text-white border-0 py-3 px-3 w-100 h-100">Welcome</button>
        </div>
        <div class="col-lg-4 col-6 mt-4 mx-auto">
          <button type="button" onClick="chooseEvent(3)" data-target="#tentang" class="text-white border-0 py-3 px-3 w-100 h-100">Visit</button>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center flex-column px-4 px-sm-0" id="tentang">
      <article class="container py-5 my-5 text-center text-white d-flex flex-column align-items-center position-relative">
        @include("partials.section-header", ["title" => "Apa itu Open Campus"])
        <p id="eventual-deskripsi">
          Open Campus terdiri dari 3 sub-event, yaitu: ITS Fair, Faculty and Departemen Day, dan One Day Lecture. ITS Fair adalah Suatu kegiatan pengenalan ITS secara umum meliputi jalur masuk ITS (SNMPTN,
          SBMPTN, SKMP), UKT ITS, beasiswa di ITS, prestasi, hingga talkshow dengan pembicara
          hebat dengan topik yang disesuaikan dengan kebutuhan peserta. Faculty and Department Day adalah Kegiatan yang dilakukan dalam satu hari untuk mengenalkan fakultas dan
          departemen yang ada di ITS kepada siswa/siswi SMA/SMK sederajat. Terakhir, One Day Lecture adalah Kegiatan yang dilakukan selama dua hari untuk memberikan pengalaman secara nyata
          mengenai pembelajaran saat kuliah kepada siswa/siswi SMA/SMK sederajat.
        </p>
      </article>
    </div>
  </section>
@endsection

<script>
  function chooseEvent(id){
    $.ajax({
        url: '../choose-event/'+id,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          $('#eventual-deskripsi').text(res.deskripsi);
          $('h2:last').text("Apa itu "+res.nama);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
  }
</script>
