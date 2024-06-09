<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Transaksi</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Katalog Kopi</h3>
  <table class="table-data">
    <thead>
        <tr>
            <th>NO</th>
            <th>Jenis Kopi</th>
            <th>Grade Kopi</th>
            <th>Nama Kopi</th>
            <th>Asal Kopi</th>
            <th>Harga/pcs</th>
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
        </tr>
        @empty
        <tr>
          <td colspan="5" align="center">Tidak ada data</td>
        </tr>
        @endforelse

    </tbody>
</table>
</body>

</html>
