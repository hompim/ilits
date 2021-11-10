
    <div id="singleGlassTwoSideCarousel" class="bg-transparent carousel slide overflow-hidden row d-flex" data-ride="carousel">
            <div class="carousel-inner p-5">
                <div class="position-relative div-dua ">
                    @for($i = 0; $i < count($titles); $i++) <div class="carousel-item @if($i == 0) active @endif">
                        <div class="my-2 card-img" >
                            <img class="py-3" src="{{asset($images[$i])}}" alt="" />
                        </div>
                        <div class="position-absolute card-right">
                            <h2 class="py-5 mx-5 ">{{$titles[$i]}}</h2>
                            <p class="pt-3 pb-5 px-5">{{$texts[$i]}}</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <a class="btn-floating btn-floating-prev position-absolute" href="#singleGlassTwoSideCarousel" data-slide="prev">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:#9829CC" aria-hidden="true" >
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.6667 20L8.33335 20" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 31.6667L8.33333 20L20 8.33335" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </a>
            <a class="btn-floating btn-floating-next position-absolute" href="#singleGlassTwoSideCarousel" data-slide="next">
                <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color:#9829CC" aria-hidden="true" >
                    <svg  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.33333 20H31.6667" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 8.33331L31.6667 20L20 31.6666" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </a>
        </div>
