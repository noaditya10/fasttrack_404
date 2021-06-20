@extends('cetakan')

@section('isi_halaman')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3>Tambah Motor</h3>
            <form action="{{route('motor.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Kode Produk <input type="text" name="KodeProduk" required>
                    Nama <input type="text" name="nama" required>
                    Deskripsi <input type="text" name="desc" required>
                </ul>
                <hr>
                <a href="{{route('motor.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection