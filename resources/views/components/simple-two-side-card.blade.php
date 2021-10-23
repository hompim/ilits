<div class="container bg-transparent " id="SimpleTwoSideCard">
    <div class="overflow-hidden row">
        <div class="py-2 px-3 px-md-4 px-xl-5 col-7 d-flex justify-content-center flex-column text-side">
            <h2 class="title">{{$title}}</h2>
            <p class="pt-1 m-0 text">{{$text}}</p>
        </div>
        <div class="col-5 p-0 image-side">
            <img src="{{$image}}" alt="{{$title}}" class="d-block w-100 h-100"style="object-fit: cover;">
        </div>
    </div>
</div>