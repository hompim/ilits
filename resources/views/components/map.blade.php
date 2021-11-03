<div class="Map position-relative">
  <iframe src="{{ $src }}" class='border-0 position-relative img-fluid' allowfullscreen
    loading="lazy"></iframe>
  <div class="container px-5 map-stage position-absolute">
    <div class="map-content d-flex justify-content-around align-items-center position-absolute">
      <span>{{ $text }}</span>
      <a href="{{ $href }}" class="d-flex jusitfy-content-center align-items-center text-decoration-none">
        <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i></a>

    </div>
    <img src="{{ asset('img/map-stage.png') }}" draggable="false" alt="Map">
  </div>
</div>
