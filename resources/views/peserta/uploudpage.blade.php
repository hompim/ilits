@extends('layouts.peserta')

@section('title','Upload Bukti')
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
    @if(Auth::user()->user->bukti_bayar&&Auth::user()->user->kartu_pelajar)
        @if(Auth::user()->user->status=='pending'||Auth::user()->user->status=='salah_forda'||Auth::user()->user->status=='pending_pembayaran')
        <div class="alert alert-warning" role="alert">
            Harap menunggu konfirmasi dari forda
        </div>
        @endif
        @if(Auth::user()->user->status=='tolak_pembayaran')
        <div class="alert alert-danger" role="alert">
            Bukti Pembayaran ditolak, silahkan upload ulang
        </div>
        @endif
    @endif
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                  <h3 class="card-title" style="font-size: 2rem">Catatan Pengunggahan Berkas</h3>
                  <hr/>
                  <ol style="list-style: decimal" class="ml-4">
                    <li>File yang diunggah memiliki ukuran <strong>max 4MB</strong>.</li>
                    <li>File yang diunggah memiliki format <strong>JPG, PNG, atau JPEG</strong>.</li>
                    <li>Jika file yang akan diunggah memiliki ukuran yang besar, maka ukuran file harus dikecilkan (dapat melalui <a href="https://compressjpeg.com">compressjpeg.com</a>).</li>
                  </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
    <form action="{{route('peserta.postupload.kartu')}}" method="POST" enctype="multipart/form-data" class="col-md-4">
        @csrf
        <div class="grid-rows-1 md:grid-cols-2">
            <div class="">
                <div class="form-group bg-white rounded-xl shadow-lg p-3 w-full" >
                <label for="kartu_pelajar" class="font-bold text-lg ">Kartu Pelajar</label>

                <p style="font-size:0.7rem">*Kartu pelajar yang diupload berupa file gambar (jpg,png,jpeg)</p>

                <img src="{{Auth::user()->user->kartu_pelajar?asset('/storage/images/kartu_pelajar/'.Auth::user()->user->kartu_pelajar):asset('/img/placeholder-image.png')}}" class="object-fit mx-auto" alt="Kartu Pelajar" id="kartu_pelajar_preview" style="max-height:50vh">
                    @if(Auth::user()->user->status=='ditolak'||!Auth::user()->user->kartu_pelajar)
                    @if(date('Y-m-d',strtotime('-2 days',strtotime(Auth::user()->user->forda->absen->date)))>=date('Y-m-d'))
                    <label class="btn btn-outline-primary mt-2">
                        <i class="fas fa-cloud-upload-alt"></i> Browse <input type="file" class="form-control-file" name="kartu_pelajar" id="kartu_pelajar" accept=".jpg,.jpeg,.png" hidden>
                    </label>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        @if(Auth::user()->user->status=='ditolak'||!Auth::user()->user->kartu_pelajar)
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-success mt-3"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>
        @endif
    </form>
    @if(Auth::user()->user->status=='pending_pembayaran'||Auth::user()->user->status=='aktif'||Auth::user()->user->status=='tolak_pembayaran')
    <form action="{{route('peserta.postupload.bukti')}}" method="POST" enctype="multipart/form-data" class="col-md-4">
        @csrf
        <div class="grid-rows-1 md:grid-cols-2">
            <div class="">
                <div class="form-group bg-white rounded-xl shadow-lg p-3 w-full" >
                    <label for="bukti_pembayaran" class="font-bold text-lg ">Bukti Pembayaran</label>

                    <p style="font-size:0.7rem">*Bukti pembayaran yang diupload berupa file gambar (jpg,png,jpeg)</p>

                    <img src="{{Auth::user()->user->bukti_bayar?asset('/storage/images/bukti_pembayaran/'.Auth::user()->user->bukti_bayar):asset('/img/placeholder-image.png')}}" class="img-fluid" alt="Bukti Pembayaran" id="bukti_pembayaran_preview" style="max-height:50vh">
                        @if(Auth::user()->user->status=='tolak_pembayaran'||!Auth::user()->user->bukti_bayar)
                        @if(date('Y-m-d',strtotime('-2 days',strtotime(Auth::user()->user->forda->absen->date)))>=date('Y-m-d'))
                        <label class="btn btn-outline-primary mt-2">
                            <i class="fas fa-cloud-upload-alt"></i> Browse <input type="file" class="form-control-file" name="bukti_pembayaran" id="bukti_pembayaran" accept=".jpg,.jpeg,.png" hidden>
                        </label>
                        @endif
                        @endif
                    </div>
            </div>
        </div>

        @if(Auth::user()->user->status=='tolak_pembayaran'||!Auth::user()->user->bukti_bayar)
        @if(date('Y-m-d',strtotime('-2 days',strtotime(Auth::user()->user->forda->absen->date)))>=date('Y-m-d'))
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-success my-3"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>
        @endif
        @endif
    </form>
    @endif
</div>
</div>
@endsection

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
@endsection
