@extends('layout.app')

@section('title')
Katalog | Kopi Ketenangan
@endsection

@section('content')
<h3>Masukan Jenis Kopi</h3>
<div class="form-login">
  <form action="{{ url('/katalog/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="jenis"> Jenis Kopi </label>
    <input class="input" type="text" name="jenis" id="jenis" placeholder="Jenis Kopi"/>

    <label for="grade"> Grade Kopi </label>
    <input class="input" type="text" name="grade" id="grade" placeholder="Grade Kopi"/>

    <label for="nama"> Nama Kopi </label>
    <input class="input" type="text" name="nama" id="nama" placeholder="Nama Kopi"/>

    <label for="asal"> Asal Kopi </label>
    <input class="input" type="text" name="asal" id="asal" placeholder="Asal Kopi"/>

    <label for="harga"> Harga Kopi / pcs </label>
    <input class="input" type="number" name="harga" id="harga" placeholder="Harga Kopi / kg"/>

    <label for="gambar">Foto Kopi</label>
	<input type="file" name="gambar" id="gambar" style="margin-bottom: 20px" />

    <button type="submit" class="btn btn-simpan" name="simpan">Simpan</button>
  </form>
</div>
@endsection
