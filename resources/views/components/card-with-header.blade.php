{{-- card with header --}}
<div class="text-center bg-transparent card" id="CardWithHeader"  >
    <h3 class="px-2 px-md-3 px-lg-4 card-header" 
    style="background: linear-gradient(45deg, {{$color1}} 0%, {{$color2}} 61.85%, {{$color3}} 88.26%);"
    >{{$title}}</h3>
    <div class="card-content px-4">
        <div class="pt-3 pt-md-4 pt-lg-5 px-3 px-md-5">
            <img src="{{$image}}" alt="{{$title}} " width="100%" >
        </div>
         <p class="py-3 py-md-4 py-lg-5 m-0">{{$text}}</p>
    </div>
</div>
