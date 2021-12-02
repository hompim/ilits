<div class="container twoSideCard">
    <div class="overflow-hidden row">
        <div class="p-5 col-lg-6 left">
            <h3 class="mb-4 text-left">{{ $title }}</h3>
            <p class="text-left">{{ $text }}</p>
            <div class="text-left">
                <x-button-link href='{{$link}}' angle='45deg' colorFrom="#E4BDCD" colorTo='#AD53CC'>{{ $buttonText }}
                </x-button-link>
            </div>
        </div>
        <div class="p-5 col-lg-6 right d-flex justify-content-center align-items-center">
            <img src="../img/fakultas/{{$image}}" class="d-block w-100" alt="{{$title}}">
        </div>
    </div>
</div>