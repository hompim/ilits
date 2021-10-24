<div class="container twoSideCard">
    <div class="overflow-hidden row">
        <div class="p-5 col-lg-6 left">
            <h3 class="mb-4 text-left">{{ $title }}</h3>
            <p class="text-left">{{ $text }}</p>
            <div class="text-left">
                <x-button-link href='#' angle='45deg' colorFrom="#E4BDCD" colorTo='#AD53CC'>{{ $buttonText }}
                </x-button-link>
            </div>
        </div>
        <div class="p-5 col-lg-6 right d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/main/web-series.png') }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>