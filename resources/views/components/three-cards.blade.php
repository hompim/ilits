<div class="m-auto text-white three-cards row justify-content-around">
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
