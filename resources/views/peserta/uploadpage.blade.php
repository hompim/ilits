@extends('adminlte::page')

@section('title','Upload Bukti Bayar')

@section('content')
<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('message'))
    <div class="alert alert-{{Session::get('status')}}" role="alert">
        {{Session::get('message')}}
    </div>
    @endif
    @if(Auth::user()->user->status=='ditolak')
        <div class="alert alert-danger" role="alert">
            Kartu Pelajar ditolak, silahkan upload ulang
        </div>
        @endif
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                  <h3 class="card-title" style="font-size: 2rem">Catatan Pengunggahan Berkas</h3><br>
                  <hr/>
                  <ol style="list-style: decimal" class="ml-4">
                    <li>File yang diunggah memiliki ukuran <strong>max 1MB</strong>.</li>
                    <li>File yang diunggah memiliki format <strong>JPG, PNG, atau JPEG</strong>.</li>
                    <li>Jika file yang akan diunggah memiliki ukuran yang besar, maka ukuran file harus dikecilkan (dapat melalui <a href="https://compressjpeg.com">compressjpeg.com</a>).</li>
                  </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
      <!-- Upload File Bayar -->
@if(Auth::user()->tryoutUser->status_bayar=='pending_pembayaran'||Auth::user()->tryoutUser->status_bayar=='aktif'||Auth::user()->tryoutUser->status_bayar=='tolak_pembayaran'||Auth::user()->tryoutUser->status_bayar == null)
<div class="card elevation-2">
    <div class="card-header">
        <h5 class="card-title">Unggah Bukti Bayar</h5>
        <p class="card-text">
            Foto bukti bayar harus terlihat dengan
            jelas!
        </p>
    </div>
    <form action="{{route('peserta.postupload.bukti')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
            <input type="file" class="form-control-file border" onchange="previewImage()" name="bukti_bayar" required style="cursor: pointer;">
            <img id="frame" src="{{Auth::user()->tryoutUser->bukti_bayar?asset('storage/images/bukti_pembayaran/'.Auth::user()->tryoutUser->bukti_bayar):asset('/img/placeholder-image.png')}}" width="100%"/>
    </div>
    @if(Auth::user()->tryoutUser->status_bayar=='tolak_pembayaran'||!Auth::user()->tryoutUser->bukti_bayar)
    <div class="card-footer text-center">
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
    @endif
    </form>
</div>
@endif

<!-- Akhir File Bayar -->
</div>
</div>
@stop

@section('js')
<script>
    function previewImage(input,imgTarget) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(imgTarget).attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#bukti_pembayaran').on('change',function(){
        previewImage(this,'#bukti_pembayaran_preview')
    })

    $('#kartu_pelajar').on('change',function(){
        previewImage(this,'#kartu_pelajar_preview')
    })

</script>
@stop
