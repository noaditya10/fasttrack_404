@extends('cetakan')

@section('isi_halaman')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Data Master Motor</h3>
            <a href="{{route("motor.create")}}">Tambah Data Motor</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>AKSI</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->kode_produk}}</td>
                    <td>{{$product->nama}}</td>
                    <td>{{$product->deskripsi}}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <input type="button" value="Delete" class="btn btn-danger">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection