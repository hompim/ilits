@extends('open-campus.main')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/open-campus/thank-you.css') }}" />
@endsection

@section('open-campus-content')

  {{-- Start Section --}}
  <section id="terima-kasih" class="container">

    {{-- Section Header --}}
    <div class="row section-header">
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
          Kamu telah terdaftar pada Faculty and Department Day Ini Lho ITS! 2022. Jangan lupa untuk terus memantau informasi menarik di sosial media Ini Lho ITS! 2022.
        </h2>
        <br>
        <h3>
          Link Zoom Meeting Faculty and Department Day Ini Lho ITS! 2022 akan dikirimkan melalui email masing-masing peserta minimal H-3 Faculty and Department Day Ini Lho ITS! 2022.
        </h3>
        <br>
        <h3>
          Info lebih lanjut hubungi: 085085085085085 (Nama)
        </h3>
      </div>
    </div>
    {{-- End Teks Terima Kasih --}}
    
  </section>
  {{-- End Section --}}

@endsection
