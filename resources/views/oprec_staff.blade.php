<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operec Staff IlITS 2022</title>
</head>
<body>
<div class="container-sm">
    <h1>Data Oprec Staff ILITS 2022</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama lengkap</th>
                <th scope="col">NRP</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Departemen</th>
                <th scope="col">Angkatan</th>
                <th scope="col">kota Asal</th>
                <th scope="col">Pilihan 1</th>
                <th scope="col">pilihan 2</th>
            </tr>
        <tbody>
            <?php $no=1; ?>
            @foreach ($oprec_staff as $data)
                <tr>

                <th scope="row">{{$no++}}</th>
                <td>{{ $data ->nama_lengkap}}</td>
                <td>{{ $data ->nrp}}</td>
                <td>{{ $data ->fakultas}}</td>
                <td>{{ $data ->departemen}}</td>
                <td>{{ $data ->angkatan}}</td>
                <td>{{ $data ->kota_asal}}</td>
                <td>{{ $data ->pilihan_1}}</td>
                <td>{{ $data ->pilihan_2}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
