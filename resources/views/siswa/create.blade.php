<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambah Data Mahasiswa</title>
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

    <h1>Manmbah Data Mahasiswa</h1>
    <form action="{{ URL::to('siswa') }}" method="post">
        @csrf
        Nama: <br>
        <input type="text" name="nama"> <br>
        Alamat: <br>
        <input type="text" name="alamat"> <br>
        No HP: <br>
        <input type="text" name="no_hp">
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
