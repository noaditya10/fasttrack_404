@extends('cetakan')

@section('isi_halaman')

<div class="container py-5 col-4" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">Login</h3>
            <form action="#" method="POST">
                <label>Email/Username</label>
                <input type="text" class="form-control" name="email" required>
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
    </div>
</div>

@endsection