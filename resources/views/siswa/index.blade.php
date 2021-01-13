<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Mahasiswa</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body  class="container">
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

    <h1>Semua Data Mahasiswa</h1>
    @if (Session::has('message'))
        <div class="alert alert-info">
            {{ Session::get('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>No HP</td>
                <td style="text-align: center" colspan="3">Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $key => $value)
            <tr>
                <td>{{ $value->id_siswa }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->no_hp }}</td>
                <td style="text-align: center">
                    <a class="btn btn-small btn-success" href="{{ URL::to('siswa/'.$value->id_siswa) }}">Detail</a>
                </td>
                <td style="text-align: center">
                    <a class="btn btn-small btn-info" href="{{ URL::to('siswa/'.$value->id_siswa.'/edit') }}">Edit</a>
                </td>
                <td style="text-align: center">
                    <form action="{{ route('siswa.destroy', ['siswa' => $value->id_siswa])  }}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button class="btn btn-small btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
