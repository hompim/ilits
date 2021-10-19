{{-- card with header --}}
<div class="text-center bg-transparent card" id="CardWithHeader"  >
    <h3 class="py-4 card-header" 
    style="background: linear-gradient(45deg, {{$color1}} 0%, {{$color2}} 61.85%, {{$color3}} 88.26%);"
    >{{$title}}</h3>
    <div class="card-body pt-5">
        <div class="py-3 px-5">
            <img src="{{$image}}" alt="{{$title}} " width="100%" >
        </div>
         <p class="py-4">{{$text}}</p>
    </div>
</div>
