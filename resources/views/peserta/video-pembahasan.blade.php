@extends('adminlte::page')

@section('title', 'Video Pembahasan Tryout')

@section('content_header')
    <h1>Video Pembahasan Tryout</h1>
@stop

@section('content')
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('img/logo.png') }}" alt="Logo ILITS 2022" height="60" width="60">
    </div>
    <div class="container-fluid">
        @if (Session::has('message'))
            <div class="alert alert-{{ Session::get('status') }}" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <!-- Main row -->
        <div class="row">
            <section class="col-12">
                <!-- Video Pembahasan -->
                <div class="card elevation-2">
                    <div class="card-header">
                        <h4 id="judul" class="font-weight-bold">
                            Soal <span class="text-info" style="text-transform:capitalize">{{$video[0]->jenis_tryout}}</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 col-12">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe id="video" class="embed-responsive-item" src="{{$video[0]->link_video}}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-2 col-12 border pt-2">
                                <h5 class="font-weight-bold text-center">Subbab</h5>
                                <div class="link-soal d-flex flex-lg-column flex-row flex-wrap justify-content-around">
                                    @foreach ($video as $v)
                                    <a onclick="chooseVideo({{$v->id}})" href="#" class="btn btn-primary m-1 flex-grow-1">{{$v->subbab}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg mt-3 pt-3 border ">
                                <h5 class="font-weight-bold">Soal <span class="text-info">00</span></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ratione velit maxime cum
                                    adipisci suscipit dolore voluptatum omnis voluptas ipsum, quos tempora porro esse
                                    tempore minima, rerum quo, sint eos sequi ducimus corporis nemo! Fuga culpa repudiandae
                                    facilis alias asperiores similique a aperiam quibusdam eius sint. Veniam asperiores a
                                    iste.</p>
                                <p>
                                    <button class="btn btn-info" type="button" data-toggle="collapse"
                                        data-target="#collapsePembahasan">
                                        Pembahasan
                                    </button>
                                </p>
                                <div class="collapse" id="collapsePembahasan">
                                    <div class="card card-body">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum tenetur repellat
                                            cum neque. Fugit, velit. Fugit ipsam animi sequi rerum corporis possimus dolorum
                                            minus voluptas in, unde rem necessitatibus placeat facere. Molestiae, quas!
                                            Perspiciatis odio a fugit ducimus cupiditate inventore fugiat dolores aliquid
                                            ratione sint, accusantium eligendi voluptate laborum tempora!</p>

                                        <p>
                                            Masih ada pertanyaan? Silahkan tanyakan disini <a href="#">Tanya Jawab</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Video Pembahasan -->
            </section>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
@stop
<script>
    function chooseVideo(id) {
      $.ajax({
        url: './choose-video/'+id,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          $("iframe").attr("src",res.link_video);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
    }
</script>
