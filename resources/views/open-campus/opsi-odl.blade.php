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
      <h2 class="text-center">Terdapat 4 sesi yang setiap sesinya dapat kamu pilih departemen yang kamu inginkan. Yuk pilih departemen impianmu!</h2>

      <form action="{{ route('open-campus.odl.register-kelas.store') }}" method="POST" id="opsi-dep">
        @csrf
        <div class="my-5 row">
          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 1</h3>
              <p class="text-center">Sabtu, 15 Januari 2022  (08.00 - 11.30 WIB)</p>
              <div class="form-group">
                <label for="sesi1">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota1')" name="sesi1" id="sesi1">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_1 as $i)
                      <option value="{{$i->kelas_id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota1">Kuota: -</p>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 2</h3>
              <p class="text-center">Sabtu, 15 Januari 2022 (13.00 - 16.00 WIB)</p>
              <div class="form-group">
                <label for="sesi2">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota2')" name="sesi2" id="sesi2">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_2 as $i)
                      <option value="{{$i->kelas_id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota2">Kuota: -</p>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 3</h3>
              <p class="text-center">Minggu, 16 Januari 2022 (08.00 - 11.00 WIB)</p>
              <div class="form-group">
                <label for="sesi3">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota3')" name="sesi3" id="sesi3">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_3 as $i)
                      <option value="{{$i->kelas_id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota3">Kuota: -</p>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 4</h3>
              <p class="text-center">Minggu, 16 Januari 2022 (13.00 - 16.00 WIB)</p>
              <div class="form-group">
                <label for="sesi4">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota4')" name="sesi4" id="sesi4">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_4 as $i)
                      <option value="{{$i->kelas_id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota4">Kuota: -</p>
            </div>
          </div>
        </div>

        <button type="button" onClick="chooseODL()"
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
          <h1>{{ Auth::user()->user->nama_lengkap }}</h1>
          <p>{{ Auth::user()->user->asal_sekolah }}</p>

          <div class="mt-3">
            <h4>Kamu telah mendaftar:</h4>
            <p id="pilihan-sesi-1" class="m-0"></p>
            <p>Sabtu, 15 Januari 2022  (08.00 - 11.30 WIB)</p>
            <p id="pilihan-sesi-2" class="m-0"></p>
            <p>Sabtu, 15 Januari 2022  (13.00 - 16.00 WIB)</p>
            <p id="pilihan-sesi-3" class="m-0"></p>
            <p>Minggu, 16 Januari 2022 (08.00 - 11.00 WIB)</p>
            <p id="pilihan-sesi-4" class="m-0"></p>
            <p>Minggu, 16 Januari 2022 (13.00 - 16.00 WIB)</p>
          </div>

          <p>Apakah data tersebut sudah benar? Pilih ‘Ya’ apabila sudah benar dan pilih ‘Tidak’ jika ingin mengubah
            pilihan.</p>

          <div class="row btn-confirmation">
            <div class="offset-md-1 col-md-4 col-12">
              <button type="button" id="submit-data"
                class="py-2 my-2 border-0 w-100 btn-submit btn-submit-1 btn d-flex justify-content-center align-items-center">Ya</button>
            </div>
            <div class="offset-md-2 col-md-4 col-12">
              <button type="button"
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
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script>
    function chooseODL() {
      let sesi1 = $('select[name=sesi1] option').filter(':selected').val();
      let sesi2 = $('select[name=sesi2] option').filter(':selected').val();
      let sesi3 = $('select[name=sesi3] option').filter(':selected').val();
      let sesi4 = $('select[name=sesi4] option').filter(':selected').val();
      $.ajax({
        url: '/open-campus/odl/kelas/'+ sesi1 + "/" + sesi2 + "/" + sesi3 + "/" + sesi4,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          $('#pilihan-sesi-1').text("Sesi 1: "+res.sesi1);
          $('#pilihan-sesi-2').text("Sesi 2: "+res.sesi2);
          $('#pilihan-sesi-3').text("Sesi 3: "+res.sesi3);
          $('#pilihan-sesi-4').text("Sesi 4: "+res.sesi4);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
    }

    $('#submit-data').click(function(){
      $('#opsi-dep').submit();
    })

    function updateKuota(id, elementID){
      $.ajax({
        url: '/open-campus/odl/kuota/'+id,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          console.log(id);
          console.log(res);
          $('#'+elementID).text("Kuota : "+res);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
    }
  </script>
@endsection
