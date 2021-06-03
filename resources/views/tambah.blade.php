@extends('cetakan')

@section('isi_halaman')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3>Tambah Motor</h3>
            <form action="#" method="POST">
                <ul class="list-group">
                    Brand <input type="text" name="brand" required>
                    Harga <input type="text" name="harga" required>
                    Gambar <input type="text" name="gambar" required>
                </ul>
                <hr>
                <a href="{{route('motor.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection