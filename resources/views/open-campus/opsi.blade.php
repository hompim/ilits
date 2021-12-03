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

      <form action="{{ route('open-campus.store-dep') }}" method="POST" id="opsi-dep">
        @csrf
        <div class="my-5 row">
          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 2</h3>
              <p class="text-center">(10.00 - 11.05 WIB)</p>
              <div class="form-group">
                <label for="sesi2">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota2')" name="sesi2" id="sesi2">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_2 as $i)
                      <option value="{{$i->id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota2">Kuota: -</p>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 3</h3>
              <p class="text-center">(11.35 - 12.40 WIB)</p>
              <div class="form-group">
                <label for="sesi3">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota3')" name="sesi3" id="sesi3">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_3 as $i)
                      <option value="{{$i->id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota3">Kuota: -</p>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 4</h3>
              <p class="text-center">(13.00 - 14.15 WIB)</p>
              <div class="form-group">
                <label for="sesi4">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota4')" name="sesi4" id="sesi4">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_4 as $i)
                      <option value="{{$i->id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota4">Kuota: -</p>
            </div>
          </div>

          <div class="p-3 col-12 col-md-6 col-lg-3">
            <div class="p-4 card">
              <h3 class="text-center">Sesi 5</h3>
              <p class="text-center">(14.45 - 16.00 WIB)</p>
              <div class="form-group">
                <label for="sesi5">Pilih salah satu</label>
                <select class="form-control" onchange="updateKuota(this.value, 'kuota5')" name="sesi5" id="sesi5">
                  <option selected value="0">Tidak Memilih</option>
                  @foreach ($sesi_5 as $i)
                      <option value="{{$i->id}}">{{$i->nama}}</option>
                  @endforeach
                </select>
              </div>
              <p id="kuota5">Kuota: -</p>
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
            <p id="pilihan-sesi-2" class="m-0"></p>
            <p>(10.05 - 11.35 WIB)</p>
            <p id="pilihan-sesi-3" class="m-0"></p>
            <p>(11.35 - 12.40 WIB)</p>
            <p id="pilihan-sesi-4" class="m-0"></p>
            <p>(13.00 - 14.15 WIB)</p>
            <p id="pilihan-sesi-5" class="m-0"></p>
            <p>(14.45 - 16.00 WIB)</p>
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
    function chooseFnD() {
      let sesi2 = $('select[name=sesi2] option').filter(':selected').val();
      let sesi3 = $('select[name=sesi3] option').filter(':selected').val();
      let sesi4 = $('select[name=sesi4] option').filter(':selected').val();
      let sesi5 = $('select[name=sesi5] option').filter(':selected').val();
      $.ajax({
        url: '/open-campus/departemen/'+ sesi2 + "/" + sesi3 + "/" + sesi4 + "/" + sesi5,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          $('#pilihan-sesi-2').text("Sesi 2: "+res.sesi2);
          $('#pilihan-sesi-3').text("Sesi 3: "+res.sesi3);
          $('#pilihan-sesi-4').text("Sesi 4: "+res.sesi4);
          $('#pilihan-sesi-5').text("Sesi 5: "+res.sesi5);
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
        url: '/open-campus/kuota/'+id,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
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
