<style>
  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css");

  @font-face{
    font-family: gothammedium;
    src: url(/fonts/gothammedium-webfont.woff);
  }

  @font-face{
    font-family: gothamlight;
    src: url(/fonts/gothamlight-webfont.woff);
  }

  .carousel-inner-wrap-two-content {
    width: 70%;
  }

  .inner-carousel-item img {
    width: 45%;
    height: 80vh;
    object-fit: cover;
  }

  .inner-carousel-item .container-text {
    background: linear-gradient(-45deg, #ffffff64, #ffffff37);
    backdrop-filter: blur(20px);
    width: 55%;
    border-radius: 0 14px 14px 0px;
  }

  .inner-carousel-item .container-text h1 {
    font-family: gothammedium;
  }

  .inner-carousel-item .container-text p {
    font-family: gothamlight;
  }

  @media screen and (max-width: 768px) {
    .inner-carousel-item img {
      height: 35vh;
      width: 100%;
    }

    .inner-carousel-item .container-text {
      width: 100%;
      height: 65vh;
      border-radius: 0;
    }
  }
</style>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner-wrap-two-content carousel-inner m-auto">
    <div class="carousel-item active">
      <div class="inner-carousel-item d-block d-md-flex">
        <img src="/img/departmen/outer-slide-1.jpg" alt="...">
        <div class="container-text p-5">
          <h1>Hello world</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dignissimos nostrum quibusdam eaque recusandae ad aut minus quia accusantium, doloremque dolor perspiciatis. Accusamus, necessitatibus aliquam nam provident totam cum tempore!</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="inner-carousel-item d-block d-md-flex">
        <img src="/img/departmen/outer-slide-2.jpg" alt="...">
        <div class="container-text p-5">
            <h1>Hello world</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatum praesentium quasi eius possimus! Nostrum accusamus nihil sequi quia, velit perspiciatis dolorem, odio molestias vel a illo distinctio cum fuga.</p>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <i class="bi bi-chevron-left" style="font-size: 50px; color: black; font-weight: 900;"></i>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <i class="bi bi-chevron-right" style="font-size: 50px; color: black; font-weight: 900;"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>