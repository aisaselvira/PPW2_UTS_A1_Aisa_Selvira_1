@extends('pemain.layout')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabel Pemain</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<style>
    .thead{
        background-color: pink;
    }
    h1{
        text-align: center;
        padding: 20px;
    }
</style>
<body>
@section('content')
    @include('pemain.header')
    <h1>Data Pemain</h1>
    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Jumlah Pemain: {{ $hitung }}</h5>
    @include('pemain.footer')
</body>
<footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-9aS5d6iAVcP5z7bF5IdB12pkf2GC930JK6f5Lwr8Qw3lFU5Kn1A1fF1JCfFJ8s5KW" crossorigin="anonymous"></script>
</body>
</html>
@endsection
