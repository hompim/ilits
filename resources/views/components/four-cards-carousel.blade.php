<div id="fourCardsCarousel" class="carousel slide carousel-multi-item position-relative" data-ride="carousel">
    <div class="controls-top">
        <a class="btn-floating btn-floating-prev position-absolute" href="#fourCardsCarousel" data-slide="prev">
            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:#9829CC" aria-hidden="true" >
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.6667 20L8.33335 20" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 31.6667L8.33333 20L20 8.33335" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
        <a class="btn-floating btn-floating-next position-absolute" href="#fourCardsCarousel" data-slide="next">
            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:#9829CC" aria-hidden="true" >
                <svg  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33333 20H31.6667" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 8.33331L31.6667 20L20 31.6666" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
    </div>
    <div class="carousel-inner" role="listbox">
        @for($i = 0; $i < count($titles)/4; $i++) <div class="carousel-item @if($i == 0) active @endif">
            <div class="row">
                <div class="col-md-3">
                    <div class="p-3 overflow-hidden card">
                        <img src="{{ asset($images[$i*4]) }}" class="card-img-top" alt="Card image cap">
                        <div class="text-center card-body p-0">
                            <h4 class="card-title pt-3">{{ $titles[$i*4] }}</h4>
                            <x-button-link href='#' class='grad w-100' >Lihat</x-button-link>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-3 d-none d-md-block">
                    <div class="p-3 overflow-hidden card">
                        <img src="{{ asset($images[$i*4+1]) }}" class="card-img-top" alt="Card image cap">
                        <div class="text-center card-body p-0">
                            <h4 class="card-title pt-3">{{ $titles[$i*4+1] }}</h4>
                            <x-button-link href='#' class='grad w-100 ' >Lihat</x-button-link>
                        </div>
                    </div>
                </div>

                <div class="clearfix col-md-3 d-none d-md-block">
                    <div class="p-3 overflow-hidden card">
                        <img src="{{ asset($images[$i*4+2]) }}" class="card-img-top" alt="Card image cap">
                        <div class="text-center card-body p-0 ">
                            <h4 class="card-title pt-3">{{ $titles[$i*4+2] }}</h4>
                            <x-button-link href='#' class='grad w-100 ' >Lihat</x-button-link>
                        </div>
                    </div>
                </div>
                <div class="clearfix col-md-3 d-none d-md-block">
                    <div class="p-3 overflow-hidden card">
                        <img src="{{ asset($images[$i*4+3]) }}" class="card-img-top" alt="Card image cap">
                        <div class="text-center card-body p-0">
                            <h4 class="card-title pt-3">{{ $titles[$i*4+3] }}</h4>
                            <x-button-link href='#' class='grad w-100 '>Lihat</x-button-link>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    @endfor
</div>
