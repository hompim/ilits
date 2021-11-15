<div class="Map position-relative">
  <iframe src="{{ $src }}" class='border-0 position-relative img-fluid' allowfullscreen
    loading="lazy"></iframe>
  @if ($withLayer)
  <div class="layer-play d-flex justify-content-center align-items-center" onClick="onVirtualExpoPlay()">
    <img src="{{ asset('img/icons/play.svg') }}" alt="Play button" draggable="false">
  </div>
  @endif
  <div class="container px-5 map-stage position-absolute">
    <div class="map-content d-flex justify-content-around align-items-center position-absolute">
      {{ $slot }}
      {{-- <span>{{ $text }}</span>
      <a href="{{ $href }}" class="d-flex jusitfy-content-center align-items-center text-decoration-none">
        <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i></a> --}}
    </div>
    <img src="{{ asset('img/map-stage.png') }}" draggable="false" alt="Map">
  </div>
</div>
