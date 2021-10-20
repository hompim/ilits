<style>
  @font-face{
    font-family: gothammedium;
    src: url(/fonts/gothammedium-webfont.woff);
  }

  @font-face{
    font-family: gothamlight;
    src: url(/fonts/gothamlight-webfont.woff);
  }

  .three-cards h3 {
    font-family: gothammedium;
    font-size: 1.4rem;
  }

  .three-cards p {
    font-family: gothamlight;
    font-size: 1.1rem;
  }

  .box-three-cards {
    width: 300px;
    height: 250px;
    background: linear-gradient(-45deg, #ffffff64, #ffffff37);
    backdrop-filter: blur(20px);
    border-radius: 18px;
    margin-bottom: 70px;
  }

  .img-three-cards {
    background-color: yellowgreen;
    padding: 10px;
    width: 70px;
    height: 70px;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 10px;
  }

  @media screen and (max-width: 290px) {
    .box-three-cards {
      width: 265px;
    }
  }
</style>

<div class="three-cards d-flex flex-column align-items-center flex-lg-row justify-content-lg-evenly">
  <div class="box-three-cards text-center position-relative pt-5 pb-3 ps-3 pe-3">
    <img src="/img/departmen/{{ $fokus1 }}.png" alt="{{ $fokus1 }}" class="img-three-cards position-absolute" style="background-color: #3FC7C3">
    <h3 class="pt-3">{{ $fokus1 }}</h3>
    <p class="lead">{{ $deskripsiFokus1 }}</p>
  </div>

  <div class="box-three-cards text-center position-relative pt-5 pb-3 ps-3 pe-3">
    <img src="/img/departmen/{{ $fokus2 }}.png" alt="{{ $fokus2 }}" class="img-three-cards position-absolute" style="background-color: #9829CC">
    <h3 class="pt-3">{{ $fokus2 }}</h3>
    <p class="lead">{{ $deskripsiFokus2 }}</p>
  </div>

  <div class="box-three-cards text-center position-relative pt-5 pb-3 ps-3 pe-3">
    <img src="/img/departmen/{{ $fokus3 }}.png" alt="{{ $fokus3 }}" class="img-three-cards position-absolute" style="background-color: #264882">
    <h3 class="pt-3">{{ $fokus3 }}</h3>
    <p class="lead">{{ $deskripsiFokus3 }}</p>
  </div>
</div>