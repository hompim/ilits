<div id="threeCardsCarouselWithHeader" class="carousel slide carousel-multi-item position-relative" data-ride="carousel">
    <div class="controls-top">
        <a class="btn-floating btn-floating-prev position-absolute" href="#threeCardsCarouselWithHeader" data-slide="prev"><i
                class="text-white fa fa-3x fa-arrow-circle-o-left" aria-hidden="true"></i></a>
        <a class="btn-floating btn-floating-next position-absolute" href="#threeCardsCarouselWithHeader" data-slide="next"><i
                class="text-white fa fa-3x fa-arrow-circle-o-right" aria-hidden="true"></i></a>
    </div>
    <div class="carousel-inner" role="listbox">
        @for($i = 0; $i < count($titles)/3; $i++) <div class="carousel-item @if($i == 0) active @endif">
            <div class="row">
                <div class="col-md-4 position-relative">
                    <div class="overflow-hidden card">
                        <h4 class="card-title text-align-center d-block w-100 pb-0 position-absolute py-1 px-5 ">{{ $titles[$i*3] }}</h4>
                        <img src="{{ asset($images[$i*3]) }}" class="card-img-top" alt="Card image cap">
                        <div class="direction position-absolute">
                            <a href="#threeCardsCarouselWithHeader" data-slide="next">
                            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:white" aria-hidden="true" >
                                <svg  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.33333 20H31.6667" stroke="#772859" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20 8.33331L31.6667 20L20 31.6666" stroke="#772859" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-4 d-none d-md-block">
                    <div class="overflow-hidden card">
                        <h4 class="card-title text-align-center d-block w-100 pb-0 position-absolute py-1 px-5 ">{{ $titles[$i*3+1] }}</h4>
                        <img src="{{ asset($images[$i*3+1]) }}" class="card-img-top" alt="Card image cap">
                        <div class="direction position-absolute">
                            <a href="#threeCardsCarouselWithHeader" data-slide="next">
                            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:white" aria-hidden="true" >
                                <svg  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.33333 20H31.6667" stroke="#772859" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20 8.33331L31.6667 20L20 31.6666" stroke="#772859" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-4 d-none d-md-block">
                    <div class="overflow-hidden card">
                    <h4 class="card-title text-align-center d-block w-100 pb-0 position-absolute py-1 px-5 ">{{ $titles[$i*3+2] }}</h4>
                        <img src="{{ asset($images[$i*3+2]) }}" class="card-img-top" alt="Card image cap">
                        <div class="direction position-absolute">
                            <a href="#threeCardsCarouselWithHeader" data-slide="next">
                            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:white" aria-hidden="true" >
                                <svg  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.33333 20H31.6667" stroke="#772859" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20 8.33331L31.6667 20L20 31.6666" stroke="#772859" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>