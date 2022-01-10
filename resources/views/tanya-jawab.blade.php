@extends('adminlte::page')

@section('title', 'Tanya Jawab')

@section('content_header')
  <h1>Tanya Jawab</h1>
@endsection

@section('css')
  <style>
    .textarea {
      display: block;
      resize: both;
      min-height: 40px;

      border: 1px solid #ccc;
      padding: 1px 6px;
      background-color: white;
    }

    .textarea[contenteditable]:empty::before {
      content: "Tuliskan tanggapanmu di sini";
      color: gray;
    }

  </style>
@endsection

@section('content')
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('img/logo.png') }}" alt="Logo ILITS 2022" height="60" width="60">
  </div>
  <div class="d-md-flex justify-content-between">
    <div class="d-md-inline-flex mb-3 dropdown-group d-flex flex-column flex-sm-row justify-content-between">
      <div class="dropdown mx-1 mb-2">
        <button class="w-100 btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="dropdown mx-1 mb-2">
        <button class="w-100 btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="dropdown mx-1 mb-2">
        <button class="w-100 btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validatedInputGroupPrepend"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Cari pertanyaan" aria-label="Search"
          aria-describedby="basic-addon2">
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h1>Soal 1</h1>
    </div>
    <div class="card-body">
        {{-- mendapatkan image --}}
        <img src="../img/soal/{{$getImage}}" alt="">
      {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eos voluptatibus tempore laudantium maxime
        autem totam illum doloremque error doloribus corporis iusto est laboriosam similique aspernatur quisquam at,
        tenetur aperiam?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima aut ab fuga nostrum neque excepturi unde,
        odio assumenda a dolor iusto maiores cum deserunt sint nesciunt rerum modi quos?</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, unde tempore? Rerum, inventore facere at earum
        quas consectetur adipisci corporis optio cupiditate ullam accusantium temporibus consequatur eum aperiam culpa
        nesciunt?</p> --}}
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h3>Tuliskan Pertanyaanmu</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="" method="post">
          <textarea name="comment" class="textarea rounded w-100" id="" rows="3" contenteditable placeholder="Tuliskan pertanyaanmu disini"></textarea>
          <button type="submit" class="btn btn-primary w-100 mt-1">Kirim</button>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="post">
    @foreach ($list as $li)
      <div class="card-header">
        <div class="pl-2">
          <div class="d-flex flex-column">
            <span class="username d-flex justify-content-between align-items-center">
              <a href="#">{{ $li->name }}</a>
              <span><i class="fas fa-user-times"></i></span>
            </span>
            <span class="description">7 Januari 2021 - 19.00</span>
          </div>
        </div>
        <p>
            {{ $li->comment }}
        </p>
        <span type="button" data-toggle="collapse" data-target="#drop-qna-0" aria-expanded="false"
          aria-controls="drop-qna-0">
          Lihat komentar...
        </span>
      </div>

      <div class="card-body collapse" id="drop-qna-0">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="pl-2">
              <div class="d-flex flex-column">
                <span class="username d-flex justify-content-between align-items-center">
                  <a href="#">Jonathan Burke Jr.</a>
                  <span class="badge badge-danger">Banned</span>
                </span>
                <span class="description">7 Januari 2021 - 19.00</span>
              </div>
            </div>
            <p>
                Lorem ipsum represents a long-held tradition for designers,
                typographers and the like. Some people hate it and argue for
                its demise, but others ignore the hate as they create awesome
                tools to help create filler text for everyone from bacon lovers
                to Charlie Sheen fans.
            </p>
          </li>
        </ul>
      </div>
    @endforeach

      {{-- List Comment (Paginations) --}}
      {{ $list->links() }}

      <div class="card-footer">
        <div class="form-group">
          <form action="" method="post">
            <textarea name="comment" class="textarea rounded w-100" id="" rows="2" contenteditable placeholder="Tuliskan tanggapanmu disini"></textarea>
            <button type="submit" class="btn btn-primary w-100 mt-1">Kirim</button>
          </form>
        </div>
      </div>


    </div>
  </div>

@endsection
