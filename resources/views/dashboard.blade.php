@extends('cetakan')

@section('isi_halaman')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Data Master Motor</h3>
            <a href="{{route("motor.create")}}">Tambah Data Motor</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Brand</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>AKSI</th>
                </tr>
                <tr>
                    <td>Yamaha</td>
                    <td>50000000</td>
                    <td>yamaha.png</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <input type="button" value="Delete" class="btn btn-danger">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection