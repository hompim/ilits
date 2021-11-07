<div id="threeCardsContainerCarousel" class="{{$carouselId}} carousel slide carousel-multi-item position-relative" data-ride="carousel">
    <div class="controls-top">
        <a class="btn-floating btn-floating-prev position-absolute" href=".{{$carouselId}}" data-slide="prev">
            <span aria-hidden="true">
                <i class="text-white fa fa-3x fa-arrow-circle-o-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="btn-floating btn-floating-next position-absolute" href=".{{$carouselId}}" data-slide="next">
            <span aria-hidden="true">
                <i class="text-white fa fa-3x fa-arrow-circle-o-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="carousel-inner" role="listbox">
        @for($i = 0; $i < count($titles)/3; $i++) <div class="carousel-item @if($i == 0) active @endif">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="p-3 overflow-hidden card card-container-1 py-2">
                        <img src="{{ asset($images[$i*3]) }}" class="card-img-top pt-4 px-2" alt="Card image cap">
                        <div class="text-center card-body mx-5">
                            <h4 class="card-title ">{{ $titles[$i*3] }}</h4>
                            <x-button-link href='#' class='grad w-100' >Lihat</x-button-link>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-4 d-none d-md-block ">
                    <div class="p-3 overflow-hidden card card-container-2 py-2">
                        <img src="{{ asset($images[$i*3+1]) }}" class="card-img-top pt-4 px-2" alt="Card image cap">
                        <div class="text-center card-body mx-5">
                            <h4 class="card-title ">{{ $titles[$i*3+1] }}</h4>
                            <x-button-link href='#' class='grad w-100 ' >Lihat</x-button-link>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-4 d-none d-md-block ">
                    <div class="p-3 overflow-hidden card card-container-3  py-2">
                        <img src="{{ asset($images[$i*3+2]) }}" class="card-img-top pt-4 px-2" alt="Card image cap">
                        <div class="text-center card-body  mx-5">
                            <h4 class="card-title ">{{ $titles[$i*3+2] }}</h4>
                            <x-button-link href='#' class='grad w-100 ' >Lihat</x-button-link>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
        @endfor
        
</div>
