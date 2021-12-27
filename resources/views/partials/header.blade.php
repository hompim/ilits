<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-slide-nav">
  <section class="container d-flex justify-content-center">
    <button class="border-0 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="mb-4 close-mobile d-none align-items-center justify-content-between">
        <a href="">
          <img src="{{ asset('img/icons/logo-small.png') }}" class="logo-small" alt="Ini Lho ITS! 2022">
        </a>
        <button class="border-0 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="border-0 fa fa-2x fa-chevron-left" aria-hidden="true"></i>
        </button>
      </div>
      <div class="mr-auto navbar-nav">
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/home.svg') }}" class="mr-3 img-responsive img-fluid" alt="Home">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/main") ? "active" : "" }}" href="{{route('main')}}">Home</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/eventual.svg') }}" class="mr-3 img-responsive img-fluid" alt="Eventual">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/eventual") ? "active" : "" }}" href="{{ route('eventual') }}">Eventual</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/fakultas.svg') }}" class="mr-3 img-responsive img-fluid" alt="Fakultas">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/fakultas") ? "active" : "" }}" href="{{route('main').'#fakultas'}}">Fakultas</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/prestasi.svg') }}" class="mr-3 img-responsive img-fluid" alt="Prestasi">
          <a class="mx-4 nav-link{{ str_contains(URL::current(), "/prestasi") ? "active" : "" }}" href="{{route('main').'#prestasi'}}">Prestasi</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/fasilitas.svg') }}" class="mr-3 img-responsive img-fluid" alt="Fasilitas">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/fasilitas") ? "active" : "" }}" href="{{route('fasilitas')}}">Fasilitas</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/alumni.svg') }}" class="mr-3 img-responsive img-fluid" alt="Alumni">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/alumni") ? "active" : "" }}" href="{{route('alumni')}}">Alumni</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/beasiswa.svg') }}" class="mr-3 img-responsive img-fluid" alt="Beasiswa">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/beasiswa") ? "active" : "" }}" href="{{route('beasiswa')}}">Beasiswa</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/beasiswa.svg') }}" class="mr-3 img-responsive img-fluid" alt="Merchandise">
          <a class="mx-4 nav-link {{ str_contains(URL::current(), "/merchandise") ? "active" : "" }}" href="{{route('merch')}}">Merchandise</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/open-campus.svg') }}" class="mr-3 img-responsive img-fluid" alt="Open campus" style="color: white">
          <div class="dropdown show">
            <a class="mx-4 nav-link dropdown-toggle" onclick="toggleDropdown()" role="button" id="dropdownMenuLink">
              Daftar
            </a>
          
            <div class="dropdown-menu" id="dropdownItemsLink">
              <a class="dropdown-item text-wrap" href="{{route('open-campus.its-fair.register')}}">ITS Fair</a>
              <a class="dropdown-item text-wrap" href="{{route('open-campus.fnd.register')}}">Faculty and Department Day</a>
              <a class="dropdown-item text-wrap" href="{{route('open-campus.odl.register')}}">One Day Lecture</a>
              <a class="dropdown-item text-wrap" href="{{route('peserta.welcome.register')}}">Welcome</a>
            </div>
          </div>
        </div>
        <div class="ml-auto">
          @php
          if (!Auth::user()) {
            $route = '/login';
            $text = 'Masuk';
          } else{
            $text = 'Dashboard';
            if(Auth::user()->user_type=='App\Models\Peserta'){
              $route = '/peserta/welcome';
            } else if(Auth::user()->user_type=='App\Models\Forda'){
              $route = '/forda';
            } else{
              $route = '/admin';
            }
          }
          @endphp
          <a class="mx-4 nav-link" href="{{$route}}">{{$text}}</a>
        </div>
      </div>
    </div>
  </section>
</nav>
<script>
  function toggleDropdown(){
    let dropdown = document.getElementById("dropdownItemsLink");
    if(dropdown.style.display=='block'){
      dropdown.style.display = 'none';
    } else{
      dropdown.style.display = 'block';
    }
  }
</script>