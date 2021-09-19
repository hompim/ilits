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
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="container d-flex flex-column justify-content-around">
                @foreach ($oprec_staff as $data)
                <h1 class="status">
                    {{$data->is_staff ? 'SELAMAT ANDA LULUS' : 'MAAF ANDA BELUM LULUS'}}
                </h1>

                <div class="detail">
                    <div class="mb-3 staff-info">
                        <p>{{ $data ->nama_lengkap}}</p>
                        <p>{{ $data ->nrp}}</p>
                        {{-- <p>{{ $data->is_staff ? $data->pilihan_1 : '' }}</p> --}}
                    </div>
                    <h4 class="helper">
                        {{$data->is_staff ? 'KAMU MENJADI BAGIAN DARI ESKALATOR CITA' : 'KAMU BELUM BERUNTUNG, TETAP SEMANGAT!'}}
                    </h4>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="challenge">Yuk cek tantangan pertamamu <button type="button" href="#"
                        class="badge badge-info border-0" data-toggle="modal" data-target="#modal-challenge">di
                        sini</button>
                </p>
            </div>
        </div>

        <div class="modal fade" id="modal-challenge" tabindex="-1" aria-labelledby="modal-challenge-label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-challenge-label">EC's Missions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <h6 class="division">Central Event</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di
                                    kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Apa yang dimiliki kucing dan tidak dimiliki hewan lain?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Regional Event</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Kenapa ayam bangunnya pagi?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Material</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    "Kapan saat yang tepat untuk membuka pintu?"
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Operational</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Sop sop apa yang banyak anak kecilnya?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Secretarial</h6>
                            <ol type="a">
                                <li>Temukan teman satu divisimu dengan cara cari dan like jawaban tebak-tebakan ini di
                                    kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Apa persamaan telepon dan jemuran?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">IT Dev</h6>
                            <ol type="a">
                                <li>Temukan teman satu divisimu dengan cara cari dan like jawaban tebak-tebakan ini di
                                    kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Buah apa yang paling durhaka?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Content Creator</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Sabun apa yang paling genit?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Documentation</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    “Apa itu cemilan?”
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Creative</h6>
                            <ol type="a">
                                <li>Temukan teman satu subdivisimu dengan cara cari dan like jawaban tebak-tebakan ini
                                    di kolom komentar postingan Pengumuman Staff Terpilih Instagram Ini Lho ITS 2022.
                                    "Kapan saat yang tepat untuk menutup pintu?"
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Campaign and Marketing</h6>
                            <ol type="a">
                                <li>Temukan teman satu divisi/subdivisimu dengan cara cari dan like jawaban
                                    tebak-tebakan ini di kolom komentar postingan Pengumuman Staff Terpilih Instagram
                                    Ini Lho ITS 2022.
                                    "Kapan saat yang tepat untuk menutup pintu?"
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Fundraising</h6>
                            <ol type="a">
                                <li>Temukan teman satu divisi/subdivisimu dengan cara cari dan like jawaban
                                    tebak-tebakan ini di kolom komentar postingan Pengumuman Staff Terpilih Instagram
                                    Ini Lho ITS 2022.
                                    "Kapan saat yang tepat untuk menutup pintu?"
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h6 class="division">Sponsorship</h6>
                            <ol type="a">
                                <li>Temukan teman satu divisi/subdivisimu dengan cara cari dan like jawaban
                                    tebak-tebakan ini di kolom komentar postingan Pengumuman Staff Terpilih Instagram
                                    Ini Lho ITS 2022.
                                    "Kapan saat yang tepat untuk menutup pintu?"
                                </li>
                                <li>Setelah menemukan teman satu subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kasub (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat “Aku
                                    emang
                                    #EskalatorCitaKeren” atau “I’m officially an #EskalatorCitaKeren”. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li>Membuat Video Persembahan Kreatif dengan minimal berisi konten perkenalan
                                    masing-masing
                                    staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita.</li>
                                <li>Datang ke 🎊Welcome Party Eskalator Cita🎊 pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! 😉
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="#" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>