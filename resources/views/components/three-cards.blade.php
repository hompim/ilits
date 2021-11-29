<div class="isNotMobileView m-auto text-white three-cards row justify-content-around">
  <div class="p-0 mx-4 item-three-cards col-lg">
    <img src="{{ $img1 }}" alt="{{ $title1 }}">
    <div class="container-text">
      <h2>{{ $title1 }}</h2>
      <p>{{ $text1 }}</p>
      <ul class="pl-0">
        @foreach (json_decode($list1, true) as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="p-0 mx-4 item-three-cards col-lg">
    <img src="{{ $img2 }}" alt="{{ $title2 }}">
    <div class="container-text">
      <h2>{{ $title2 }}</h2>
      <p>{{ $text2 }}</p>
      <ul class="pl-0">
        @foreach (json_decode($list2, true) as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="p-0 mx-4 item-three-cards col-lg">
    <img src="{{ $img3 }}" alt="{{ $title3 }}">
    <div class="container-text">
      <h2>{{ $title3 }}</h2>
      <p>{{ $text3 }}</p>
      <ul class="pl-0">
        @foreach (json_decode($list3, true) as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

{{-- mobile view --}}
<div class="isMobileView col-10 mx-auto d-none"> 
  <div id="threeCardsMobile" class=" {{ $carouselId }} carousel slide multi-item-carousel" data-ride="carousel">
    <div class="controls-top">
      <a class="btn-floating btn-floating-prev position-absolute" href=".{{ $carouselId }}" data-slide="prev"><i
          class="text-white fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
      <a class="btn-floating btn-floating-next position-absolute" href=".{{ $carouselId }}" data-slide="next"><i
          class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="item-three-cards px-3 carousel-item active">
            <div class="overflow-hidden card"> 
              <img src="{{ $img1 }}" alt="{{ $title1 }}">
              <div class="container-text">
                <h2>{{ $title1 }}</h2>
                <div class="card-text">
                  <p>{{ $text1 }}</p>
                  <ul class="pl-0">
                    @foreach (json_decode($list1, true) as $item)
                      <li>{{ $item }}</li>
                    @endforeach
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
  
          <div class="item-three-cards px-3 carousel-item">
            <div class="overflow-hidden card">
              <img src="{{ $img2 }}" alt="{{ $title2 }}">
              <div class="container-text">
                <h2>{{ $title2 }}</h2>
                <div class="card-text">
                  <p>{{ $text2 }}</p>
                  <ul class="pl-0">
                    @foreach (json_decode($list2, true) as $item)
                      <li>{{ $item }}</li>
                    @endforeach
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
  
          <div class="item-three-cards px-3 carousel-item">
            <div class="overflow-hidden card">
              <img src="{{ $img3 }}" alt="{{ $title3 }}">
              <div class="container-text">
                <h2>{{ $title3 }}</h2>
                <div class="card-text">
                  <p>{{ $text3 }}</p>
                  <ul class="pl-0">
                    @foreach (json_decode($list3, true) as $item)
                      <li>{{ $item }}</li>
                    @endforeach
                  </ul>
                </div>
                
              </div>  
            </div>
          </div>
    </div>
  </div>  
</div>
