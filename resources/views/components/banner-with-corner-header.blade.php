<div class="contaiener py-4">
    <div class="position-relative banner" id="BannerWithCornerHeader">
        <h2 class="d-block py-1 px-3 py-sm-3 px-sm-4 text-start bg-light position-absolute header" style="color: {{$color}}">
            {{$title}}
        </h2>
        
        <img class="banner-image" src="{{$image}}" alt="{{$title}}" width="100%">
        
        <div class="direction position-absolute">
          <a class="link" href="#">
            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: {{$color}}">
              <svg class="arrow-right" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.33333 20H31.6667" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 8.33331L31.6667 20L20 31.6666" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
    </div>
 </div>

