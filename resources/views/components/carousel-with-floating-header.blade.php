<div class="container position-relative carouselWithFloatingHeader py-3 px-5">
    <div class="top-0 px-5 py-3 floating-header position-absolute">
        <h2>{{ $headerTitle }}</h2>
    </div>
    <ol class="carousel-indicators position-absolute">
        @for($i = 0; $i < count($titles); $i++) <li data-target="#facilityCarousel-b" data-slide-to="{{ $i }}"
            class="mx-2 bg-white rounded-circle active">
            </li>
        @endfor
    </ol>
    <div id="facilityCarousel-b" class="carousel slide position-relative" data-ride="carousel">
        <div class="carousel-inner">
            @for($i = 0; $i < count($titles); $i++) <div class="carousel-item @if($i == 0) active @endif">
                <div class="mx-0 my-4 m-lg-5 ">
                    <div class="mb-4">
                        <h3 class="text-left">{{ $titles[$i] }}</h3>
                    </div>
                    <div class="row">
                        <div class="mb-5 m-lg-0 col-lg-6 right d-flex justify-content-center align-items-center">
                            <img src="{{ asset($images[$i]) }}" class="d-block w-100 h-100" alt="{{ $titles[$i] }}">
                        </div>
                        <div class=" text-left col-lg-6 left d-flex justify-content-between align-items-center">
                            <p class="text-justify m-0 overflow-auto">{{ $texts[$i] }}</p>
                        </div>
                    </div>
                </div>
                
        </div>
        @endfor
    </div>
</div>
</div>