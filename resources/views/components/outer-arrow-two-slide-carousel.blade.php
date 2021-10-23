<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner-wrap-two-content carousel-inner w-75 m-auto">
    <div class="carousel-item active">
      <div class="inner-carousel-item d-block d-md-flex">
        <img src="{{ $sourceImg1 }}" alt="{{ $aktivitas1 }}">
        <div class="container-text p-5">
          <h1>{{ $aktivitas1 }}</h1>
          <p>{{ $deskripsiAktivitas1 }}</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="inner-carousel-item d-block d-md-flex">
        <img src="{{ $sourceImg2 }}" alt="{{ $aktivitas2 }}">
        <div class="container-text p-5">
          <h1>{{ $aktivitas2 }}</h1>
          <p>{{ $deskripsiAktivitas2 }}</p>
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <i class="bi bi-chevron-left" style="font-size: 50px; color: black; font-weight: 900;"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <i class="bi bi-chevron-right" style="font-size: 50px; color: black; font-weight: 900;"></i>
    <span class="sr-only">Next</span>
  </a>
</div>