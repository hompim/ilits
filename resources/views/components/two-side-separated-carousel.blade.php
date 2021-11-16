
        <div id="twoSideSeparatedCarousel" class="{{$carouselId}} bg-transparent carousel slide" data-ride="carousel">
            <div class="controls-top">
                <a class="btn-floating btn-floating-prev position-absolute" href=".{{$carouselId}}" data-slide="prev"><i
                        class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
                <a class="btn-floating btn-floating-next position-absolute" href=".{{$carouselId}}" data-slide="next"><i
                        class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="carousel-inner ">
                    @for($i = 0; $i < count($titles); $i++) 
                    <div class="carousel-item @if($i == 0) active @endif">
                        <div class="div-dua row">
                            <div class="card-img col-6" >
                                <img class="" src="{{asset($images[$i])}}" alt="" />
                            </div>
                            <div class="card-right col-3 offset-2">
                                <h2 class="mb-4">{{$titles[$i]}}</h2>
                                <p class="">{{$texts[$i]}}</p>
                            </div>
                        </div>
                    </div>
                    @endfor
            </div>
        </div>
