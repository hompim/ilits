@extends('adminlte::page')

@section('title', 'Daftar Welcome')

@section('content_header')
<h1>Pendaftaran Welcome</h1>
@stop

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('img/logo.png')}}" alt="Logo ILITS 2022" height="60" width="60">
</div>
<div class="container-fluid pb-5">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="text-center mt-1">
                        <span class="p-2 rounded">Data Diri</span>
                    </h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('peserta.welcome.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap"
                                value="{{ $update_peserta->nama_lengkap }}" name="nama_lengkap" required />
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah"
                                value="{{ $update_peserta->asal_sekolah }}" name="asal_sekolah" required />
                        </div>
                        <div class="form-group">
                            <label for="kota_kab_asal_sekolah">Kota/Kabupaten Asal Sekolah</label>
                            <input type="text" class="form-control" id="kota_kab_asal_sekolah"
                                value="{{ $update_peserta->kota_kab_asal_sekolah }}" name="kota_kab_asal_sekolah"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="no_wa">No. Whatsapp</label>
                            <input type="text" class="form-control" id="no_wa"
                                value="{{ $update_peserta->no_wa }}" name="no_wa" required />
                        </div>
                        <div class="form-group">
                            <label for="is_pelajar_aktif">Pelajar Aktif</label>
                            <input type="text" class="form-control" id="is_pelajar_aktif" value="{{ $update_peserta->is_pelajar_aktif }}"
                                name="is_pelajar_aktif" readonly/>
                        </div>
                        <div class="form-group bg-primary rounded pt-3 pb-2">
                            <h3 class="text-center">Pilihan Tryout</h3>
                        </div>
                        <div class="form-group">
                            <label for="pilihan_tryout">Pilih Tryout</label>
                            <select name="pilihan_tryout" id="pilihan_tryout" class="form-control" required>
                                <option value="">Pilih Jenis Tryout</option>
                                <option value="Saintek">Saintek</option>
                                <option value="Soshum">Soshum</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="validasi_data" required />
                            <label class="form-check-label" for="validasi_data">Saya menyatakan bahwa
                                data yang ada telah benar</label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /. card -->
        </div>
        <!-- /. col -->
    </div>
</div>
@stop

@section('js')
<script type="text/javascript">
    $(function () {
        $('#validasi_data').on('click', function () {
            $('#nama_lengkap, #asal_sekolah, #kota_kab_asal_sekolah, #no_wa, #pilihan_tryout').attr('disabled', $(this).is(':checked'));
        });
    });
</script>
@stop