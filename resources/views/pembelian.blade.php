<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian</title>
</head>
<body>
    @foreach ($pembelian as $data)
    Nama Barang : {{ $data->nama_barang }} <br>
    Nama Suplier : {{ $data->nama_suplier }} <br>
    Qty : {{ $data->qty }} <br>
    Tanggal Pesan :{{ $data->tgl }} <br>
    <hr>

    @endforeach
</body>
</html>
