@extends('layouts.app')

@section('title')
<title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/pages/department.css') }}" />
<link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/two-side-color-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/carousel-with-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/two-side-card.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/five-items-grid.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/card-with-header.css') }}">
@endsection

@section('content')
<section class="d-flex justify-content-center flex-column" id='jumbotron'>
  <article class="container text-black">
    <div class="col-12 col-md-8 col-lg-6">
      <h1 class='mb-5'>DEPARTEMEN<br>TEKNIK INFORMATIKA</h1>
      <x-button-link href='#' angle='20deg' colorFrom="#3b71c7" colorTo='#59d3da'>Kenali
        Lebih
        Lanjut
      </x-button-link>
    </div>
  </article>
</section>

<section class="text-white d-flex justify-content-center align-items-center flex-column" id='Kenali'>
    <article class="container">
      <x-carousel-with-floating-header headerTitle='Fasilitas Apa Saja Yang Ada di ITS' titles='Graha ITS, Graha ITS'
        texts='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius eligendi, tempore vel ipsa! Provident,|possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur officia e'
        buttonText='Kenali Lebih Lanjut' images='img/main/web-series.png,img/main/web-series.png' />
      </div>
    </article>
</section>

{{-- fix --}}
<section class="d-flex justify-content-center flex-column" id="video-profile">
  <article class="container text-center">
      <div class="container row">
        <div class="col-lg-8 offset-lg-2 p-0" >
            <x-video-embed src="https://www.youtube.com/embed/8iuLXODzL04"/>
        </div>
    </div>
   </article>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      <h2 class='mb-5'>Akreditasi Besaing</h2>
      <x-three-cards-carousel titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
        images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
        texts="Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content." />
    </div>
</section>

<section class="d-flex justify-content-center text-center flex-column" id="kekekatan">
    <div class="container">
        <div class="row">
            <h2 class="col-12 mb-5">Kekekatan Departemen</h2>
            <div class="col-12" style="min-height: 320px; color:red">
                <svg width="632" height="317" viewBox="0 0 632 317" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M464.653 149C464.653 122.708 457.554 96.9032 444.105 74.3117C430.656 51.7201 411.356 33.1798 388.244 20.6488C365.131 8.11775 339.065 2.06098 312.796 3.11807C286.527 4.17517 261.031 12.3069 239 26.6545L263.895 64.8875C279.042 55.0235 296.57 49.4329 314.63 48.7062C332.69 47.9794 350.611 52.1435 366.5 60.7586C382.39 69.3737 395.659 82.1201 404.905 97.6518C414.151 113.183 419.032 130.924 419.032 149H464.653Z" fill="url(#paint0_linear_0:1)"/>
                    <path d="M227.835 45.6545C206.638 59.4588 189.392 78.534 177.786 101.011C166.18 123.487 160.613 148.594 161.63 173.87C162.647 199.146 170.213 223.724 183.587 245.196C196.961 266.667 215.684 284.295 237.921 296.351C260.158 308.408 285.146 314.479 310.435 313.971C335.725 313.462 360.448 306.391 382.182 293.45C403.916 280.509 421.915 262.143 434.416 240.151C446.916 218.159 453.488 193.297 453.488 168H407.867C407.867 185.391 403.348 202.484 394.754 217.604C386.16 232.723 373.786 245.35 358.844 254.247C343.902 263.144 326.904 268.005 309.518 268.355C292.131 268.704 274.952 264.53 259.665 256.242C244.377 247.953 231.505 235.834 222.31 221.072C213.115 206.31 207.913 189.413 207.214 172.036C206.515 154.658 210.343 137.397 218.322 121.945C226.301 106.492 238.157 93.3779 252.73 83.8875L227.835 45.6545Z" fill="url(#paint1_linear_0:1)"/>
                    <path d="M470 47L514 3H632" stroke="#111028" stroke-width="5"/>
                    <path d="M162 270L118 314L0 314" stroke="#111028" stroke-width="5"/>
                    <defs>
                    <linearGradient id="paint0_linear_0:1" x1="407" y1="43" x2="336.5" y2="149" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFF2CE"/>
                    <stop offset="1" stop-color="#44E0DC"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_0:1" x1="162" y1="314" x2="332" y2="144" gradientUnits="userSpaceOnUse">
                    <stop offset="0.146282" stop-color="#9829CC"/>
                    <stop offset="1" stop-color="#44E0DC"/>
                    </linearGradient>
                    </defs>
                    </svg>
            </div>
        </div>
    </div>
</section>


<section class=" d-flex justify-content-center text-center flex-column" id="fokus-keilmuan">
    <div class="container">
        <div class="row">
            <h2 class="col-12 mb-4">Fokus Keilmuan</h2>
            <div class="col-12 d-flex justify-content-between flex-row " style="min-height: 320px; color:red">
                <div>
                    <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M69.9997 128.333C69.9997 128.333 116.666 105 116.666 70.0001V29.1667L69.9997 11.6667L23.333 29.1667V70.0001C23.333 105 69.9997 128.333 69.9997 128.333Z" stroke="url(#paint0_linear_431:142)" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                        <linearGradient id="paint0_linear_431:142" x1="69.9997" y1="11.6667" x2="69.9997" y2="128.333" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0416667" stop-color="#FFF2CE"/>
                        <stop offset="0.484375" stop-color="#3FC7C3"/>
                        <stop offset="1" stop-color="#9829CC"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <h3>Cyber Security</h3>
                </div>
                
                <div>
                    <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M69.9997 128.333C69.9997 128.333 116.666 105 116.666 70.0001V29.1667L69.9997 11.6667L23.333 29.1667V70.0001C23.333 105 69.9997 128.333 69.9997 128.333Z" stroke="url(#paint0_linear_431:142)" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                        <linearGradient id="paint0_linear_431:142" x1="69.9997" y1="11.6667" x2="69.9997" y2="128.333" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0416667" stop-color="#FFF2CE"/>
                        <stop offset="0.484375" stop-color="#3FC7C3"/>
                        <stop offset="1" stop-color="#9829CC"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <h3>Web Development</h3>
                </div>
                <div>
                    <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M69.9997 128.333C69.9997 128.333 116.666 105 116.666 70.0001V29.1667L69.9997 11.6667L23.333 29.1667V70.0001C23.333 105 69.9997 128.333 69.9997 128.333Z" stroke="url(#paint0_linear_431:142)" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                        <linearGradient id="paint0_linear_431:142" x1="69.9997" y1="11.6667" x2="69.9997" y2="128.333" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0416667" stop-color="#FFF2CE"/>
                        <stop offset="0.484375" stop-color="#3FC7C3"/>
                        <stop offset="1" stop-color="#9829CC"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <h3>Software Engineering</h3>
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      <h2 class='mb-5'>Segudang Prestasi</h2>
      <x-three-cards-carousel titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
        images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
        texts="Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content." />
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      <h2 class='mb-5'>Sesuikan Dengan Prospek Kerja</h2>
      <x-three-cards-carousel titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
        images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
        texts="Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content." />
    </div>
</section>

<section class="d-flex justify-content-center align-items-center flex-column" id='figure'>
    <div class="container text-center">
      <h2 class='mb-5'>Outstanding Figure</h2>
      <x-three-cards-carousel titles="Juara 1, Juara 1, Juara 1, Juara 1, Juara 1, Juara 1"
        images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
        texts="Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content.|Some quick example text to build on the card title and make up the bulk
        of the
        card's content." />
    </div>
</section>

<section class="d-flex justify-content-center align-items-center">
    <article class="container row">
      <div class="col-12 col-lg-6 offset-lg-3">
        <x-card-with-header 
        title="Juara 1 Internasional"
        text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fuga soluta eligendi corrupti recusandae qui ipsa illo eius voluptatibus, voluptate blanditiis nemo"
        image="img/main/prestasi-2.png"
        color1="#9829CC"
        color2="#3FC7C3"
        color3="#FFF9EE"
        />
      </div>
    </article>
</section>


<section class="text-white d-flex justify-content-center align-items-center flex-column" id='faculty-detail'>
    <article class="container">
      <h2 class='mb-5'>Kegiatan Mahasiswa</h2>
      <x-two-side-card title='Quadratlon' text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius
      eligendi, tempore vel
      ipsa! Provident, possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur
      officia
      est hic.' buttonText='Lihat Departemen' />
    </article>
  </section>

<section class="text-white d-flex justify-content-center align-items-center flex-column" id='facility'>
    <article class="container">
      <x-carousel-with-floating-header headerTitle='Fasilitas Untuk Semua' titles='Graha ITS, Graha ITS'
        texts='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptatibus velit eius eligendi, tempore vel ipsa! Provident,|possimus. Hic possimus repellendus velit ipsa! Ducimus reiciendis soluta consequatur officia e'
        buttonText='Kenali Lebih Lanjut' images='img/main/web-series.png,img/main/web-series.png' />
      </div>
    </article>
</section>
@endsection

@section('js')
<script src="{{ asset('js/components/three-cards-carousel.js') }}" defer></script>
@endsection