<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Open Recruitment Staff</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oprec/form-size.css') }}">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="form-oprec">
            <div class="container-form p-3 p-md-5">
                <div class="row py-4">
                    <h2 class="font-weight-bold text-center w-100">Pendaftaran Staff Divisi/Subdivisi Ini Lho ITS! 2022</h2>
                </div>
                <form action="{{ route('oprec.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">Nama lengkap</label>
                        <input class="form-control @error('nama_lengkap') is-invalid @enderror" type="text" value="{{ old('nama_lengkap') }}" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkapmu">
                        @error('nama_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input class="form-control @error('nrp') is-invalid @enderror" type="text" name="nrp" value="{{ old('nrp') }}" id="nrp" placeholder="Masukkan nama lengkapmu">
                        @error('nrp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fakultas">Fakultas</label>
                        <select name="fakultas" id="fakultas" class="form-control @error('fakultas') is-invalid @enderror">
                            @foreach ($fakultas as $i)
                            @if ($i==old('fakultas'))
                            <option selected value="{{$i}}">{{$i}}</option>
                            @else
                            <option value="{{$i}}">{{$i}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('fakultas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen</label>
                        <select name="departemen" id="departemen" class="form-control @error('departemen') is-invalid @enderror">
                            @foreach ($departemen as $i)
                            @if ($i==old('departemen'))
                            <option selected value="{{$i}}">{{$i}}</option>
                            @else
                            <option value="{{$i}}">{{$i}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('departemen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <select name="angkatan" id="angkatan" class="form-control @error('angkatan') is-invalid @enderror">
                            @foreach ($angkatan as $i)
                            @if ($i==old('angkatan'))
                            <option selected value="{{$i}}">{{$i}}</option>
                            @else
                            <option value="{{$i}}">{{$i}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('angkatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kota_asal">Kota/Kabupaten asal</label>
                        <input type="text" name="kota_asal" value="{{ old('kota_asal') }}" class="form-control @error('kota_asal') is-invalid @enderror" placeholder="Masukkan kota/kabupaten asalmu">
                        @error('kota_asal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="apa_itu_ilits">Apa yang kamu ketahui tentang Ini Lho ITS!?</label>
                        <textarea class="form-control @error('apa_itu_ilits') is-invalid @enderror" name="apa_itu_ilits" id="apa_itu_ilits" rows="3">{{ old('apa_itu_ilits') }}</textarea>
                        @error('apa_itu_ilits')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="motivasi_ilits">Apa motivasimu ingin menjadi bagian dari Ini Lho ITS! 2022?</label>
                        <textarea class="form-control @error('motivasi_ilits') is-invalid @enderror" name="motivasi_ilits" id="motivasi_ilits" rows="3">{{ old('motivasi_ilits') }}</textarea>
                        @error('motivasi_ilits')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pilihan_1">Divisi/Subdivisi pilihan 1 kamu?</label>
                        <select name="pilihan_1" id="pilihan_1" class="form-control @error('pilihan_1') is-invalid @enderror">
                            @foreach ($pil_divisi as $i)
                            @if ($i==old('pilihan_1'))
                            <option selected value="{{$i}}">{{$i}}</option>
                            @else
                            <option value="{{$i}}">{{$i}}</option>
                            @endif
                            @endforeach
                        </select>             
                        @error('pilihan_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alasan_pilihan_1">Apa alasan dan motivasimu memilih divisi/subdivisi pada pilihan pertamamu?</label>
                        <textarea class="form-control @error('alasan_pilihan_1') is-invalid @enderror" name="alasan_pilihan_1" id="alasan_pilihan_1" rows="3">{{old('alasan_pilihan_1')}}</textarea>
                        @error('alasan_pilihan_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pilihan_2">Divisi/Subdivisi pilihan 2 kamu?</label>
                        <select name="pilihan_2" id="pilihan_2" class="form-control @error('pilihan_2') is-invalid @enderror">
                            @foreach ($pil_divisi as $i)
                            @if ($i==old('pilihan_2'))
                            <option selected value="{{$i}}">{{$i}}</option>
                            @else
                            <option value="{{$i}}">{{$i}}</option>
                            @endif
                            @endforeach
                        </select>             
                        @error('pilihan_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alasan_pilihan_2">Apa alasan dan motivasimu memilih divisi/subdivisi pada pilihan keduamu?</label>
                        <textarea class="form-control @error('alasan_pilihan_2') is-invalid @enderror" name="alasan_pilihan_2" id="alasan_pilihan_2" rows="3">{{old('alasan_pilihan_2')}}</textarea>
                        @error('alasan_pilihan_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="komitmen">Dari 1-10, berapa komitmenmu dalam mengikuti IniLho ITS! 2022?</label>
                        <select class="form-control @error('komitmen') is-invalid @enderror" name="komitmen" id="komitmen">
                            <option {{ (old('komitmen')==1)? 'selected' : '' }} value="1">1</option>
                            <option {{ (old('komitmen')==2)? 'selected' : '' }} value="2">2</option>
                            <option {{ (old('komitmen')==3)? 'selected' : '' }} value="3">3</option>
                            <option {{ (old('komitmen')==4)? 'selected' : '' }} value="4">4</option>
                            <option {{ (old('komitmen')==5)? 'selected' : '' }} value="5">5</option>
                            <option {{ (old('komitmen')==6)? 'selected' : '' }} value="6">6</option>
                            <option {{ (old('komitmen')==7)? 'selected' : '' }} value="7">7</option>
                            <option {{ (old('komitmen')==8)? 'selected' : '' }} value="8">8</option>
                            <option {{ (old('komitmen')==9)? 'selected' : '' }} value="9">9</option>
                            <option {{ (old('komitmen')==10)? 'selected' : '' }} value="10">10</option>
                        </select>
                        @error('komitmen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-100 d-flex justify-content-center py-4">
                        <button class="btn btn-lg btn-primary" type="submit">
                            <span class="px-5">
                                Daftar
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>  
</body>
</html>