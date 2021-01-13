<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('siswa') }}">Data Mahasiswa</a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ URL::to('siswa') }}">Melihat Data Mahasiswa</a>
                </li>
                <li>
                    <a href="{{ URL::to('siswa/create') }}">Menambah Data Mahasiswa</a>
                </li>
            </ul>
        </div>
    </nav>

    <h1>Detail Mahasiswa {{ $siswa->nama }}</h1>
    <div class="jumbotron text-center">
        <h2>{{ $siswa->nama }}</h2>
        <p>
            <strong>Alamat:</strong>
            {{ $siswa->alamat }} <br>
            <strong>No HP:</strong>
            {{ $siswa->no_hp }}
        </p>
    </div>
</body>
</html>
