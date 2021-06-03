@extends('cetakan')

@section('isi_halaman')
<h1>Halaman Beranda</h1>
<input type="button" value="Home" class="btn btn-primary">
<input type="button" value="Profile" class="btn btn-success">
<br>
<br>
<table class="table table-bordered table-hover">
    <tr>
        <td>Sidebar</td>
        <td colspan="2">Judul Utama</td>
        <td>Sidebar</td>
    </tr>
    <tr>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
    </tr>
</table>

{{-- start --}}
<br>
<br>
<div class="row">
    <div class="col">Sidebar</div>
    <div class="col">Judul Utama</div>
    <div class="col">Sidebar</div>
</div>
{{-- end --}}

@endsection