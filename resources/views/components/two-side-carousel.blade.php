<div class="container py-5 overflow-hidden TwoSideCarousel position-relative">
  <div class="justify-content-center align-items-center d-flex">
    <div id="TargetTwoSideCarousel" class="bg-transparent carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @for ($i = 0; $i < count($titles); $i++)
          <div class="carousel-item @if ($i === 0) active @endif">
            <div class="d-flex align-items-center">
              <div class="pr-5 left-side">
                <h3 class="mb-4 text-left">{{ $titles[$i] }}</h3>
                <p class="text-left">{{ $texts[$i] }}</p>
                @if ($buttonTexts)
                <div class="text-left">
                  <x-button-link href='#' angle='20deg' colorFrom="#3b71c7" colorTo='#59d3da'>{{ $buttonTexts[$i] }}
                  </x-button-link>
                </div>
                @endif
              </div>
              <div class="right-side">
                <img src="{{ asset($images[$i]) }}" class="img-fluid" alt="{{ $titles[$i] }}">
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </div>
  <ol class="carousel-indicators">
    @for ($i = 0; $i < count($images); $i++)
      <li data-target="#TargetTwoSideCarousel" data-slide-to="{{ $i }}"
        class="mx-2 bg-white active rounded-circle">
      </li>
    @endfor
  </ol>
  <a class="carousel-control-prev justify-content-start" href="#TargetTwoSideCarousel" role="button" data-slide="prev">
    <i class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next justify-content-end" href="#TargetTwoSideCarousel" role="button" data-slide="next">
    <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>