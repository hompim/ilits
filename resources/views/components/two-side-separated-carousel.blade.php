<div id="twoSideSeparatedCarousel" class="{{ $carouselId }} bg-transparent carousel slide" data-ride="carousel">
    
    <div class="carousel-inner ">
        @for ($i = 0; $i < count($titles); $i++)
            <div class="carousel-item  @if ($i == 0) active  @endif">
                <div class="row mx-0">
                    <div class="card-image mb-4 mb-lg-0 col-lg-7 px-3 px-md-5 p-lg-0">
                        <img class="w-100 h-100 " src="{{ asset($images[$i]) }}" alt="{{ $titles[$i] }}" />
                    </div>
                    <div class="card-text col-lg-4 mx-1 ml-lg-auto p-4 p-md-5 px-lg-4 py-lg-5">
                        <h3 class="mb-3 mb-sm-4">{{ $titles[$i] }}</h3>
                        <p class="m-0 w-100 text-wrap">{{ $texts[$i] }}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
