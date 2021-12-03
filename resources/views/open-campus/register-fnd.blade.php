@extends('open-campus.main')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/open-campus/register-fnd.css') }}">
@endsection

@section('open-campus-content')
  <!-- header section start -->
  <header class="content d-flex text-center justify-content-center align-items-center">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1 class="content-title">Faculty and<br> Department Day</h1>
              </div>
          </div>
          <div class="row my-3">
              <div class="col">
                  <h5 class="content-text"> <span class="bg-white highlight">100.000 students</span> have already registered!</h5>
              </div>
          </div>
          <div class="row my-4">
              <div class="col">
                    <form action="{{ route('open-campus.regis-fnd.store') }}" method="post">
                        @csrf
                        {{-- <button type="submit"></button> --}}
                        <a type="button" onclick="this.parentNode.submit()" class="btn-content"> Daftar Sekarang! </a>
                    </form>
              </div>
          </div>
      </div>
  </header>
  <!-- header end -->
@endsection


