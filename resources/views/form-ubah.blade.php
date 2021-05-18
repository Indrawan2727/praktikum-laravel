<h1>Ubah Data Stok</h1>

<form action="/simpan" method="POST">
<label for="merk">MEREK</label>
<input type="text" id="merk" name="merk" 
value="{{ $data[0]->merk }}"><br></br>

<label for="tipe">TIPE</label>
<input type="text" id="tipe" name="tipe"
value="{{ $data[0]->nama }}"><br></br>

<label for="harga">HARGA</label>
<input type="number" id="harga" name="harga"
value="{{ $data[0]->harga }}"><br></br>

<input type="hidden" value="{{ $data[0]->id}}"
id="id" name="id">
<input type="submit" value="SIMPAN">

</form>