@extends('open-campus.main')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
  <link rel="stylesheet" href="{{ asset('css/open-campus/opsi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('open-campus-content')
  <section class="d-flex justify-content-center flex-column" id="pengenalan-departemen">
    <article class="container text-white">
      @include('partials.section-header', ["title" => "Pengenalan Departemen"])
      <h2 class="text-center">Sesi Departemen merupakan pemaparan Departemen yang ada di ITS secara umum. Sesi
        Departemen dilakukan setelah
        sesi Fakultas selesai. Pilih satu departemen untuk setiap sesi yang tersedia berikut.</h2>

      <form action="/" method="POST">
        <div class="my-5 row">
          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 2</h3>
              <p class="text-center">(10.00 - 11.05 WIB)</p>
              <div class="form-group">
                <label for="sesi2">Pilih salah satu</label>
                <select class="form-control" id="sesi2">
                  <option>Arsitektur</option>
                  <option>Teknik Lingkungan</option>
                  <option>PWK</option>
                  <option>Sipil</option>
                  <option>Infrastruktur Sipil</option>
                  <option>Desain Interior</option>
                  <option>Geomatika</option>
                  <option>Geofisika</option>
                  <option>MaMet</option>
                  <option>Kimia Industri</option>
                  <option>Elektro</option>
                  <option>Elektro Otomasi</option>
                  <option>Teknik Kimia</option>
                  <option>Kimia</option>
                  <option>Mesin</option>
                  <option>Mesin Industri</option>
                  <option>Teknik Fisika</option>
                  <option>Fisika</option>
                  <option>Statistika</option>
                  <option>Statistika Bisnis</option>
                  <option>Aktuaria</option>
                  <option>Matematika</option>
                  <option>Biologi</option>
                  <option>Biomedik</option>
                  <option>Sistem dan Industri</option>
                  <option>Instrumentasi</option>
                  <option>DKV</option>
                  <option>Desain Produk</option>
                  <option>Informatika</option>
                  <option>Teknik Komputer</option>
                  <option>Sistem Informasi</option>
                  <option>Teknologi Informasi</option>
                  <option>Teknik Perkapalan</option>
                  <option>Sistem Perkapalan</option>
                  <option>Transportasi Laut</option>
                  <option>Kelautan</option>
                  <option>Studi Pembangunan</option>
                  <option>Manajemen Bisnis</option>
                </select>
              </div>
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="sesi-2-no">
                <label class="custom-control-label" for="sesi-2-no">Tidak memilih sesi ini</label>
              </div>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 3</h3>
              <p class="text-center">(11.35 - 12.40 WIB)</p>
              <div class="form-group">
                <label for="sesi3">Pilih salah satu</label>
                <select class="form-control" id="sesi3">
                  <option>Arsitektur</option>
                  <option>Teknik Lingkungan</option>
                  <option>PWK</option>
                  <option>Sipil</option>
                  <option>Infrastruktur Sipil</option>
                  <option>Desain Interior</option>
                  <option>Geomatika</option>
                  <option>Geofisika</option>
                  <option>MaMet</option>
                  <option>Kimia Industri</option>
                  <option>Elektro</option>
                  <option>Elektro Otomasi</option>
                  <option>Teknik Kimia</option>
                  <option>Kimia</option>
                  <option>Mesin</option>
                  <option>Mesin Industri</option>
                  <option>Teknik Fisika</option>
                  <option>Fisika</option>
                  <option>Statistika</option>
                  <option>Statistika Bisnis</option>
                  <option>Aktuaria</option>
                  <option>Matematika</option>
                  <option>Biologi</option>
                  <option>Biomedik</option>
                  <option>Sistem dan Industri</option>
                  <option>Instrumentasi</option>
                  <option>DKV</option>
                  <option>Desain Produk</option>
                  <option>Informatika</option>
                  <option>Teknik Komputer</option>
                  <option>Sistem Informasi</option>
                  <option>Teknologi Informasi</option>
                  <option>Teknik Perkapalan</option>
                  <option>Sistem Perkapalan</option>
                  <option>Transportasi Laut</option>
                  <option>Kelautan</option>
                  <option>Studi Pembangunan</option>
                  <option>Manajemen Bisnis</option>
                </select>
              </div>
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="sesi-3-no">
                <label class="custom-control-label" for="sesi-3-no">Tidak memilih sesi ini</label>
              </div>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 4</h3>
              <p class="text-center">(13.00 - 14.15 WIB)</p>
              <div class="form-group">
                <label for="sesi4">Pilih salah satu</label>
                <select class="form-control" id="sesi4">
                  <option>Arsitektur</option>
                  <option>Teknik Lingkungan</option>
                  <option>PWK</option>
                  <option>Sipil</option>
                  <option>Infrastruktur Sipil</option>
                  <option>Desain Interior</option>
                  <option>Geomatika</option>
                  <option>Geofisika</option>
                  <option>MaMet</option>
                  <option>Kimia Industri</option>
                  <option>Elektro</option>
                  <option>Elektro Otomasi</option>
                  <option>Teknik Kimia</option>
                  <option>Kimia</option>
                  <option>Mesin</option>
                  <option>Mesin Industri</option>
                  <option>Teknik Fisika</option>
                  <option>Fisika</option>
                  <option>Statistika</option>
                  <option>Statistika Bisnis</option>
                  <option>Aktuaria</option>
                  <option>Matematika</option>
                  <option>Biologi</option>
                  <option>Biomedik</option>
                  <option>Sistem dan Industri</option>
                  <option>Instrumentasi</option>
                  <option>DKV</option>
                  <option>Desain Produk</option>
                  <option>Informatika</option>
                  <option>Teknik Komputer</option>
                  <option>Sistem Informasi</option>
                  <option>Teknologi Informasi</option>
                  <option>Teknik Perkapalan</option>
                  <option>Sistem Perkapalan</option>
                  <option>Transportasi Laut</option>
                  <option>Kelautan</option>
                  <option>Studi Pembangunan</option>
                  <option>Manajemen Bisnis</option>
                </select>
              </div>
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="sesi-4-no">
                <label class="custom-control-label" for="sesi-4-no">Tidak memilih sesi ini</label>
              </div>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 5</h3>
              <p class="text-center">(14.45 - 16.00 WIB)</p>
              <div class="form-group">
                <label for="sesi5">Pilih salah satu</label>
                <select class="form-control" id="sesi5">
                  <option>Arsitektur</option>
                  <option>Teknik Lingkungan</option>
                  <option>PWK</option>
                  <option>Sipil</option>
                  <option>Infrastruktur Sipil</option>
                  <option>Desain Interior</option>
                  <option>Geomatika</option>
                  <option>Geofisika</option>
                  <option>MaMet</option>
                  <option>Kimia Industri</option>
                  <option>Elektro</option>
                  <option>Elektro Otomasi</option>
                  <option>Teknik Kimia</option>
                  <option>Kimia</option>
                  <option>Mesin</option>
                  <option>Mesin Industri</option>
                  <option>Teknik Fisika</option>
                  <option>Fisika</option>
                  <option>Statistika</option>
                  <option>Statistika Bisnis</option>
                  <option>Aktuaria</option>
                  <option>Matematika</option>
                  <option>Biologi</option>
                  <option>Biomedik</option>
                  <option>Sistem dan Industri</option>
                  <option>Instrumentasi</option>
                  <option>DKV</option>
                  <option>Desain Produk</option>
                  <option>Informatika</option>
                  <option>Teknik Komputer</option>
                  <option>Sistem Informasi</option>
                  <option>Teknologi Informasi</option>
                  <option>Teknik Perkapalan</option>
                  <option>Sistem Perkapalan</option>
                  <option>Transportasi Laut</option>
                  <option>Kelautan</option>
                  <option>Studi Pembangunan</option>
                  <option>Manajemen Bisnis</option>
                </select>
              </div>
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="sesi-5-no">
                <label class="custom-control-label" for="sesi-5-no">Tidak memilih sesi ini</label>
              </div>
            </div>
          </div>
        </div>

        <button type="button" onClick="chooseFnD()"
          class="px-5 py-3 m-auto border-0 btn-modal btn d-flex justify-content-center align-items-center"
          data-toggle="modal" data-target="#confirmation-FnD">Konfirmasi</button>
      </form>

    </article>
  </section>

  <div id="confirmation-FnD" class="modal fade" id="exampleModal" tabindex="-1"
    aria-labelledby="confirmation-FnD-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="p-4 text-center text-white modal-body">
          <h1>Nur Muhammad</h1>
          <p>SMAN 2 Madiun</p>

          <div class="mt-3">
            <h4>Kamu telah mendaftar:</h4>
            <p class="m-0">Sesi 1: Pengenalan Fakultas</p>
            <p>(09.00 - 10.05 WIB)</p>
            <p class="m-0">Sesi 2: </p>
            <p>(.00 - 10.05 WIB)</p>
            <p class="m-0">Sesi 3: </p>
            <p>(11.35 - 12.40 WIB)</p>
            <p class="m-0">Sesi 4: </p>
            <p>(13.00 - 14.15 WIB)</p>
            <p class="m-0">Sesi 5: </p>
            <p>(14.45 - 16.00 WIB)</p>
          </div>

          <p>Apakah data tersebut sudah benar? Pilih ‘Ya’ apabila sudah benar dan pilih ‘Tidak’ jika ingin mengubah
            pilihan.</p>

          <div class="row btn-confirmation">
            <div class="offset-md-1 col-md-4 col-12">
              <button type="button" onClick="chooseFnD()"
                class="py-2 my-2 border-0 w-100 btn-submit btn-submit-1 btn d-flex justify-content-center align-items-center">Ya</button>
            </div>
            <div class="offset-md-2 col-md-4 col-12">
              <button type="button" onClick="chooseFnD()"
                class="py-2 my-2 border-0 w-100 btn-submit btn-submit-0 btn d-flex justify-content-center align-items-center"
                data-toggle="modal" data-target="#confirmation-FnD">Tidak</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
    function chooseFnD() {
      $.ajax({
        url: '/open-campus/choose-fnd',
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {},
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
    }
  </script>
@endsection
