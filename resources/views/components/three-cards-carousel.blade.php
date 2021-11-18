<div id="threeCardsCarousel" class=" {{ $carouselId }} carousel slide multi-item-carousel" data-ride="carousel">
  <div class="controls-top">
    <a class="btn-floating btn-floating-prev position-absolute" href=".{{ $carouselId }}" data-slide="prev"><i
        class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
    <a class="btn-floating btn-floating-next position-absolute" href=".{{ $carouselId }}" data-slide="next"><i
        class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i></a>
  </div>
  <div class="carousel-inner row w-100 mx-auto" role="listbox">
    @for ($i = 0; $i < count($titles); $i++)
      <div class="carousel-item @if ($i == 0) active @endif col-lg-4">

        <div class="overflow-hidden card">
          <img src="{{ asset($images[$i]) }}" class="w-100 h-100" alt="Card image cap">
          <div class="pb-3 text-left card-body">
            <h3 class="card-title">{{ $titles[$i] }}</h3>
            <p class="card-text">{{ $texts[$i] }}</p>
          </div>
        </div>

      </div>
    @endfor
  </div>
</div>
@push('scripts')
  <script>
    $('.{{ $carouselId }}').on('slide.bs.carousel', function(e) {
      /*
          CC 2.0 License Iatek LLC 2018 - Attribution required
      */
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      // warning: 5 sduah kombnasi yang tepat
      var itemsPerSlide = 5;
      var totalItems = $('.{{ $carouselId }} .carousel-item').length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $('.{{ $carouselId }} .carousel-item').eq(i).appendTo('.{{ $carouselId }} .carousel-inner');
          } else {
            $('.{{ $carouselId }} .carousel-item').eq(0).appendTo('.{{ $carouselId }} .carousel-inner');
          }
        }
      }
    });
  </script>
@endpush
