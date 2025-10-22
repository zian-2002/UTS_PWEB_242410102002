@extends('layouts.app')

@section('content')
<h3 class="text-center mb-4">Daftar Produk Skincare </h3>

<table class="table table-hover text-center align-middle shadow-sm">
    <thead style="background-color: #ffb6c1;">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
            <td>{{ $item['stok'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
