<div class="container px-5 py-5 position-relative CardWithFloatingHeader">
  <div class="top-0 py-2 floating-header position-absolute">
    <h2 class="m-0">{{ $title }}</h2>
  </div>
  <div class="pt-5 pb-4 row">
    <div class="px-5 col-lg-6 right d-flex flex-column justify-content-start align-items-center">
      <img src="{{ asset($image) }}" class="d-block w-100" alt="{{ $title }}">
    </div>
    <div class="px-5 text-left col-lg-6 left d-flex flex-column justify-content-between align-items-center">
      <p class="text-justify">{{ $text }}
      </p>
    </div>
  </div>
</div>
</div>
