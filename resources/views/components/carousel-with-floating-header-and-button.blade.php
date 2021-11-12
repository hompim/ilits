<div class="container px-5 pt-5 position-relative CarouselWithFloatingHeaderAndButton">
  <div class="top-0 px-5 py-3 floating-header position-absolute">
    <h2>{{ $headerTitle }}</h2>
  </div>
  <ol class="carousel-indicators position-absolute">
    @for ($i = 0; $i < count($titles); $i++)
      <li data-target="#facilityCarousel" data-slide-to="{{ $i }}"
        class="mx-2 bg-white rounded-circle active">
      </li>
    @endfor
  </ol>
  <div id="facilityCarousel" class="carousel slide position-relative" data-ride="carousel">
    <div class="carousel-inner">
      @for ($i = 0; $i < count($titles); $i++) <div class="carousel-item @if ($i == 0) active @endif">
      <div class="mt-3 row">
        <h3 class="px-5 text-left col-12">{{ $titles[$i] }}</h3>
      </div>
      <div class="row">
        <div class="px-5 col-lg-6 right d-flex flex-column justify-content-center align-items-center">
          <img src="{{ asset($images[$i]) }}" class="d-block w-100" alt="{{ $titles[$i] }}">
        </div>
        <div class="px-5 text-left col-lg-6 left d-flex flex-column justify-content-between align-items-center">
          <p class="text-left">{{ $texts[$i] }}</p>
          <div class="text-left w-100">
            <x-button-link href='#' angle='45deg' colorFrom="#E4BDCD" colorTo='#AD53CC' class='w-75'>
              {{ $buttonText }}
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
    @endfor
  </div>
  <a class="position-absolute carousel-control" href="#facilityCarousel" role="button" data-slide="prev">
    <i class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="position-absolute carousel-control" href="#facilityCarousel" role="button" data-slide="next">
    <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
