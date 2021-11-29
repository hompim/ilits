@extends('open-campus.main')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/open-campus/event-regist.css') }}">
@endsection

@section('open-campus-content')
  <!-- header section start -->
  <section>
    <div class="SectionHeader container">
      <div class="container-fluid">
        <h2 class="px-5 py-2 m-auto bg-info position-relative">Pendaftaran Open Campus</h2>
      </div>
    </div>
  </section>
  <!-- header end -->

  <!-- pendaftaran section start -->
  <section class="pendaftaran">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/open-campus/opening.png') }}" class="d-block w-100" alt="opening">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/open-campus/opening.png') }}" class="d-block w-100" alt="opening">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/open-campus/opening.png') }}" class="d-block w-100" alt="opening">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-4">
          <form action="#" method="get">
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" nama="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon"
                placeholder="Nomor Telepon">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="forda" name="forda" placeholder="Forum Daerah">
            </div>
            <div class="text-center">
              <button type="submit" class="btn-daftar mt-4">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- pendaftaran end -->
  @endsection
