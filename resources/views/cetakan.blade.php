<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

    </style>
</head>

<body style="min-height: 500px">
    <nav class="navbar navbar-expand bg-dark">
        <ul class="navbar-nav">
            <li>
                <a class="nav-link" href="{{url('/beranda')}}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('/katalog')}}">Katalog</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('/yamaha')}}">Yamaha</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-link">
                <a href="{{url('/login')}}" class="btn btn-outline-success">Login</a>
            </li>
        </ul>
    </nav>
    <div class="container" style="min-height: 500px">
        {{-- Isi dari halaman --}}
        @yield('isi_halaman')
    </div>


    {{-- footer --}}
    <footer class="footer bg-dark text-white" style="height: 200px; padding: 50px;">
        <div class="row">
            <div class="col">
                <h5>Percayakan pembelian motor Anda pada kami.</h5>
                <p>Hubungi : 08123-456-789</p>
            </div>
            <div class="col">
                <h5>Social Media</h5>
                <p>Instagram : @sumbermotor</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>