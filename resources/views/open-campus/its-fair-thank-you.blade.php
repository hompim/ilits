@extends('open-campus.main')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/open-campus/thank-you.css') }}" />
@endsection

@section('open-campus-content')

  {{-- Start Section --}}
  <section id="terima-kasih" class="container vh-100 d-flex justify-content-center align-items-center flex-column">

    {{-- Section Header --}}
    <div class="row section-header w-100">
      <div class="col">
          <div class="SectionHeader">
              <div class="container-fluid">
                  <h2 class="px-5 py-2 m-auto bg-info position-relative text-thank-you">
                      Terima Kasih!
                  </h2>
              </div>
          </div>
      </div>
    </div>
    {{-- End Section Header --}}

    {{-- Teks Terima Kasih --}}
    <div class="row text-white text-center px-2 px-sm-5">
      <div class="col">
        <h2>
          Kamu telah terdaftar pada ITS Fair Ini Lho ITS! 2022. Jangan lupa untuk terus memantau informasi menarik di sosial media Ini Lho ITS! 2022.
        </h2>
        <br>
        <h3>
          Link Zoom Meeting ITS Fair Ini Lho ITS! 2022 dapat diakses melalui Dashboard Peserta.
        </h3>
        <br>
      </div>
    </div>
    {{-- End Teks Terima Kasih --}}
    
  </section>
  {{-- End Section --}}

@endsection
