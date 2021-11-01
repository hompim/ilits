<div class="overflow-hidden text-center bg-transparent card CarouselWithHeader">
    <h3 class="p-4 text-center card-header">{{ $headerTitle }}</h3>
    <div class="p-5 card-body position-relative">
        <div id="carouselWithHeaderList" class="mb-5 bg-transparent carousel slide" data-ride="carousel">
            <div class="container carousel-inner">
                @for($i = 0; $i < count($titles); $i++) <div class="carousel-item @if($i == 0) active @endif">
                    <h4 class="card-title">{{ $titles[$i] }}</h4>
                    <img src="{{ asset($images[$i]) }}" class="mx-auto mb-4 d-block w-75" alt="{{ $titles[$i] }}">
                    <p class="card-text text-">{{ $texts[$i] }}</p>
            </div>
            @endfor
        </div>
        <a class="position-absolute prev" href="#carouselWithHeaderList" role="button" data-slide="prev">
            <span aria-hidden="true">
                <i class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="position-absolute next" href="#carouselWithHeaderList" role="button" data-slide="next">
            <span aria-hidden="true">
                <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <x-button-link href='#' angle='45deg' colorFrom="#8060C9" colorTo='#59D3DA' class='mx-auto'>{{ $buttonText }}
        </x-button-link>
    </div>
</div>
</div>