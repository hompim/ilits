<div id="simpleThreeCardsCarousel" class=" {{$carouselId}} carousel slide carousel-multi-item position-relative" data-ride="carousel">
    <div class="controls-top">
        <a class="btn-floating btn-floating-prev position-absolute" href=".{{$carouselId}}" data-slide="prev"><i
                class="text-white fa fa-3x fa-arrow-circle-o-left" aria-hidden="true"></i></a>
        <a class="btn-floating btn-floating-next position-absolute" href=".{{$carouselId}}" data-slide="next"><i
                class="text-white fa fa-3x fa-arrow-circle-o-right" aria-hidden="true"></i></a>
    </div>
    <div class="carousel-inner" role="listbox">
        @for($i = 0; $i < count($titles)/3; $i++) <div class="carousel-item @if($i == 0) active @endif">
            <div class="row">
                <div class="col-md-4">
                    <div class="overflow-hidden card">
                        <img src="{{ asset($images[$i*3]) }}" alt="Card image cap">
                        <div class="text-center">
                            <h4 class="card-title mx-5">{{ $titles[$i*3] }}</h4>
                       </div>
                    </div>
                </div>

                <div class="clearfix col-md-4 d-none d-md-block">
                    <div class="overflow-hidden card">
                        <img src="{{ asset($images[$i*3+1]) }}" alt="Card image cap">
                        <div class="text-center">
                            <h4 class="card-title mx-5">{{ $titles[$i*3+1] }}</h4>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-4 d-none d-md-block">
                    <div class="overflow-hidden card">
                        <img src="{{ asset($images[$i*3+2]) }}" alt="Card image cap">
                        <div class="text-center">
                            <h4 class="card-title mx-5">{{ $titles[$i*3+2] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>