<div id="twoSideSeparatedCarousel" class="{{ $carouselId }} bg-transparent carousel slide" data-ride="carousel">
    <div class="controls-top">
        <a class="btn-floating btn-floating-prev position-absolute" href=".{{ $carouselId }}" data-slide="prev"><i
                class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
        <a class="btn-floating btn-floating-next position-absolute" href=".{{ $carouselId }}" data-slide="next"><i
                class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    <div class="carousel-inner ">
        @for ($i = 0; $i < count($titles); $i++)
            <div class="carousel-item  @if ($i == 0) active  @endif">
                <div class="row mx-0">
                    <div class="card-image mb-4 mb-lg-0 col-lg-7 px-3 px-md-5 p-lg-0">
                        <img class="w-100 h-100 " src="{{ asset($images[$i]) }}" alt="{{ $titles[$i] }}" />
                    </div>
                    <div class="card-text col-lg-4 mx-1 ml-lg-auto p-4 p-md-5 px-lg-4 py-lg-5">
                        <h3 class="mb-3 mb-sm-4">{{ $titles[$i] }}</h3>
                        <p class="m-0">{{ $texts[$i] }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
