@extends('cetakan')

@section('isi_halaman')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3>Ubah Motor</h3>
            <form action="#" method="POST">
                <ul class="list-group">
                    Brand <input type="text" name="brand" value="Yamaha" required>
                    Harga <input type="text" name="harga" value="50000000" required>
                    Gambar <input type="text" name="gambar" value="yamaha.png" required>
                </ul>
                <hr>
                <a href="{{route('motor.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection