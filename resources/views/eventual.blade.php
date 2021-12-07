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
      <h2 class="mb-4">Ini Lho ITS! 2022</h2>
      <x-button-link href="">Kenali Lebih Lanjut!</x-button-link>
    </article>
  </section>

  <section class="d-flex justify-content-center align-items-center flex-column" id="event">
    <article class="container text-center text-white mb-5">
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
    </article>
  </section>

  <section class="d-flex justify-content-center flex-column px-4 px-sm-0" id="tentang">
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
  </section>

  {{-- <section class="d-flex justify-content-center flex-column" id="dokumentasi">
    <article class="container py-5 text-center text-white d-flex flex-column align-items-center position-relative">
      <div class="row">
        <img class="col-lg-6 mb-5 pl-lg-0" src="img/eventual/dokum-1.png" alt="dokum-1">
        <img class="col-lg-6 mb-5 pr-lg-0" src="img/eventual/dokum-2.png" alt="dokum-2">
      </div>
      </article>
  </section>

  <section class="d-flex justify-content-center align-items-center" id="informasi-penting">
    <article class="text-white d-flex justify-content-center align-items-center flex-column">
      <h2 class="mb-4 text-center mb-5 col-10 mx-auto">Ayo, Jangan Lewatkan Keseruan Open Campus ILITS! 2022! </h2>
      <x-button-link href="#" angle="45deg" colorFrom="#8060C9" colorTo="#59D3DA">Daftar
      </x-button-link>
    </article>
  </section> --}}

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
