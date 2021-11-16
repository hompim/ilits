@extends('adminlte::page')

@section('title', 'Update Link')

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div class="container">
  <form action="{{ route('link.update.store', $old_link->id) }}" class="my-4" method="POST">
      @csrf
      <div class="form-group">
        <label for="slug">{{ Request::getHost().'/' }}</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ $old_link->slug }}" placeholder="Masukkan shorten link">
      </div>
      <div class="form-group">
        <label for="redirect">Redirect to</label>
        <input type="text" name="link" id="redirect" class="form-control" value="{{ $old_link->link }}" placeholder="Masukkan link yang dituju">
      </div>
      <div class="w-100 d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Update</button>
      </div>
  </form>
</div>
@stop