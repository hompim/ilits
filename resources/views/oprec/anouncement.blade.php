<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pengumuman Open Registration</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/oprec/oprec-anouncement.css') }}">
</head>

<body>
    <main class="vw-100 vh-100">
        <div class="container-fluid">
            <div class="container">
                <h1 class="status position-absolute">SELAMAT</h1>
                <div class="detail position-absolute">
                    <div class="mb-5 staff-info">
                        {{-- <p>Stephen Hawking</p>
                        <p>5026669990</p>
                        <p>DIVISI IT DEVELOPMENT</p> --}}
                        @foreach ($oprec_staff as $data)
                        <p>{{ $data ->nama_lengkap}}</p>
                        <p>{{ $data ->nrp}}</p>
                        <p>{{ $data ->pilihan_1}}</p>
                        @endforeach
                    </div>
                    <h4 class="helper">KAMU MENJADI BAGIAN DARI ESKALATOR CITA</h4>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        ["load", "resize"].forEach((e) => {
        window.addEventListener(e, () => {
            if (document.body.clientWidth > 576) {
                document.getElementsByTagName("main")[0].style.backgroundImage = {{ $status }} ? "url('/images/oprec/bg-anouncement-success.png')" : "url('/images/oprec/bg-anouncement-fail.png')";
            } else {
                document.getElementsByTagName("main")[0].style.backgroundImage = {{ $status }} ? "url('/images/oprec/bg-anouncement-success-mobile.png')" : "url('/images/oprec/bg-anouncement-fail-mobile.png')";
            }
        });
    });
    </script>
</body>

</html>
