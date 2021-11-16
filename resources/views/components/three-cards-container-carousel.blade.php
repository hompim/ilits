<div id="threeCardsContainerCarousel" class="{{$carouselId}} carousel slide carousel-multi-item position-relative" data-ride="carousel">
    <div class="controls-top">
        <a class="btn-floating btn-floating-prev position-absolute" href=".{{$carouselId}}" data-slide="prev">
            <span aria-hidden="true">
                <i class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="btn-floating btn-floating-next position-absolute" href=".{{$carouselId}}" data-slide="next">
            <span aria-hidden="true">
                <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
        @for($i = 0; $i < count($titles); $i++) 
            <div class="carousel-item @if($i == 0) active @endif col-sm-12 col-lg-4">
                <div class="">
                    <div class="p-3 overflow-hidden card card-container-1 py-2">
                        <img src="{{ asset($images[$i]) }}" class="card-img-top pt-4 px-2" alt="Card image cap">
                        <div class="text-center card-body mx-5">
                            <h4 class="card-title ">{{ $titles[$i] }}</h4>
                            <x-button-link href='#' class='grad w-100' >Lihat</x-button-link>
                        </div>
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