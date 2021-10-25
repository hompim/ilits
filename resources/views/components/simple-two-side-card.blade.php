<div class="container bg-transparent" id="SimpleTwoSideCard">
    <div class="overflow-hidden row">
        <div class="text-left pb-0 pt-4 px-4 py-sm-2 px-xl-5 col-sm-7 left d-flex justify-content-center flex-column text-side">
            <h2 class="title">{{$title}}</h2>
            <p class="pt-1 m-0 text">{{$text}}</p>
        </div>
        <div class="col-sm-5 right p-4 py-2 p-sm-0 image-side">
            <img src="{{$image}}" alt="{{$title}}" class="d-block w-100 h-100"style="object-fit: cover;">
        </div>
    </div>
</div>
