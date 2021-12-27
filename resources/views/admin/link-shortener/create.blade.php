@extends('adminlte::page')

@section('title', 'Link Shortener')

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div>
    <div class="w-100 d-flex justify-content-center align-items-center">
        <h1 class="py-4">Link Shortener Ini Lho ITS!</h1>
    </div>
    <div class="container">
        @if($errors->any())
            <div class="error">
                <h3>{{$errors->first()}}</h3>
            </div>
        @endif
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <form action="{{ route('link.store') }}" class="my-4" method="POST">
            @csrf
            <div class="form-group">
              <label for="slug">{{ Request::getHost().'/' }}</label>
              <input type="text" name="slug" id="slug" class="form-control" placeholder="Masukkan shorten link">
            </div>
            <div class="form-group">
              <label for="redirect">Redirect to</label>
              <input type="url" name="link" id="redirect" class="form-control" placeholder="Masukkan link yang dituju">
            </div>
            <div class="w-100 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="col-5">Url</th>
                            <th scope="col" class="col-5">Redirect To</th>
                            <th scope="col" class="col-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($link_all as $i)
                            <tr>
                                <td class="col-5"><a href="{{url('/').'/'.$i->slug }}">{{ url('/').'/'.$i->slug }}</a></td>
                                <td class="col-5"><a href="{{ $i->link }}">Link ini</a></td>
                                <td class="col-2 text-center">
                                    <form method="POST" class="d-inline" action="{{ route('link.delete', $i->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="
                                        return confirm('Hapus Link?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <a class="btn btn-primary btn-sm mx-1" href="{{route('link.update', $i->id)}}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@stop