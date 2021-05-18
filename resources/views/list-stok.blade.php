<html>
<head>
<link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<div class="container">
<div class="jumbotron">
<h1> Stok Kendaraan</h1>
</div>
</div>

<a href ="/tambah">Tambah</a><br></br>
<table border="1" style="width:50%;">
<tr>
<th>MERK</th>
<th>TIPE</th>
<th>HARGA</th>
<th>OPSIN</th>
</tr>
@foreach ($data as $i)
    <tr>
    <td>{{$i->merk}}</td>
    <td>{{$i->nama}}</td>
    <td>{{$i->harga}}</td>
    <td> <a href="/ubah{{$i->id}}">UBAH</a>
     <a href="/hapus{{$i->id}}">HAPUS</a>
    </td>
    </tr>
@endforeach
</html>