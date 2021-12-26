<div id="textCard" class="row text-center">
    @for($i = 0; $i < count($texts); $i++)
    <div class="text col-md-6 col-lg-4 mx-auto text-center p-2 mb-4 ">
        <h4 class="p-4 h-100 d-flex justify-content-center align-items-center">{{$texts[$i]}}</h4>
    </div>             
    @endfor    
</div>