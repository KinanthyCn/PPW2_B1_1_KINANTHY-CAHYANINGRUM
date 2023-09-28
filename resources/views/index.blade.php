@extends('layouts')

@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection