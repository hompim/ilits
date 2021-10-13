<div class="overflow-hidden row d-flex" id="twoSideColorCarousel">
    <div class="p-5 desc">
        <h3 class="mb-4 text-left">{{ $title }}</h3>
        <p class="text-left">{{ $text }}</p>
        <div class="text-left">
            <x-button-link href='#' angle='20deg' colorFrom="#3b71c7" colorTo='#59d3da'>Kenali
                Lebih
                Lanjut
            </x-button-link>
        </div>
    </div>
    <div class="p-5 right d-flex justify-content-center align-items-center">
        <div id="carouselGeneralInfo" class="bg-transparent carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i = 0; $i < count($images); $i++) <li data-target="#carouselGeneralInfo" data-slide-to="{{ $i }}"
                    class="mx-2 bg-white active rounded-circle">
                    </li>
                    @endfor
            </ol>
            <div class="carousel-inner">
                @foreach($images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img src="img/main/web-series.png" class="d-block w-100" alt="{{ $title }}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselGeneralInfo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselGeneralInfo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>