@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
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
</div>
@endsection