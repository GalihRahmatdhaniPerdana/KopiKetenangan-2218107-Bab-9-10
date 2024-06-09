@extends('layout.app')

@section('title')
Katalog | Kopi Ketenangan
@endsection

@section('content')
<h3>Hapus Data Katalog</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/katalog/destroy/' . $katalog->id_katalog ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/katalog">
      No
    </a>
  </button>
</div>
@endsection
