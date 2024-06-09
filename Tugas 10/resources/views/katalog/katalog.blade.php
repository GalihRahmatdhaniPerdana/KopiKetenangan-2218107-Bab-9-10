@extends('layout.app')

@section('title')
Katalog | Kopi Ketenangan
@endsection

@section('content')
<h3>Jenis Kopi </h3>
<a class="btn btn-tambah" href="{{ url('/katalog/tambah') }}" style="float:left; text-decoration: none;">Add Data</a>
<a class="btn btn-tambah" href="{{ url('/katalog/cetak') }}" style="float:left; text-decoration: none; margin-left: 5px;">Cetak</a>
<table class="table-data">
    <thead>
        <tr>
            <th>NO</th>
            <th>Jenis Kopi</th>
            <th>Grade Kopi</th>
            <th>Nama Kopi</th>
            <th>Asal Kopi</th>
            <th>Harga/pcs</th>
            <th>Gambar Kopi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($katalog as $no => $katalog)
        <tr>
            <td>{{ $no +1 }}</td>
            <td>{{ $katalog->jenis_kopi }}</td>
            <td>{{ $katalog->grade }}</td>
            <td>{{ $katalog->nama }}</td>
            <td>{{ $katalog->asal }}</td>
            <td>Rp. {{ number_format($katalog->harga) }}</td>
            <td><img src="{{ asset('img_katalog/' . $katalog->gambar)  }}" alt="" width="300px"></td>
            <td>
                <a class='btn-edit' href="/katalog/edit/{{ $katalog->id_katalog }}">Edit</a>
                |
                <a class='btn-delete' href="/katalog/hapus/{{ $katalog->id_katalog }}">Hapus</a>
            </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" align="center">Tidak ada data</td>
        </tr>
        @endforelse

    </tbody>
</table>
@endsection
