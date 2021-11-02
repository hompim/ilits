<div class="three-cards m-auto text-white d-flex justify-content-md-between justify-content-lg-around">

    <div class="item-three-cards">
      <img src="{{ $img1 }}" alt="{{ $title1 }}">
      <div class="container-text">
        <h2>{{ $title1 }}</h2>
        <p>{{ $text1 }}</p>
        <ul>
          @foreach (json_decode($list1, true) as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="item-three-cards">
      <img src="{{ $img2 }}" alt="{{ $title2 }}">
      <div class="container-text">
        <h2>{{ $title2 }}</h2>
        <p>{{ $text2 }}</p>
        <ul class="d-flex flex-column pl-0">
          @foreach (json_decode($list2, true) as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="item-three-cards">
      <img src="{{ $img3 }}" alt="{{ $title3 }}">
      <div class="container-text">
        <h2>{{ $title3 }}</h2>
        <p>{{ $text3 }}</p>
        <ul>
          @foreach (json_decode($list3, true) as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>

</div>
