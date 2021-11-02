<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
</head>



<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/"><img src="{{ asset('images/logokemkes.png')}}"></a></h5>
        
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/">Home</a>
            <a class="p-2 text-dark" href="#">Tentang</a>
            <a class="p-2 text-dark" href="#">Program</a>
            <a class="p-2 text-dark" href="#">Karir</a>
            <a class="p-2 text-dark" href="#">FAQ</a>
        </nav>
    </div>
    <div class="container" style="margin-bottom: 60px;">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="label-help">Apa Yang Bisa Kami Bantu</h4>
                {!! Form::open(['url'=>'search','method'=>'GET']) !!}
                <input type="text" name="keyword" class="form-control" style="width:600px;margin: auto;" placeholder="Cari Disini .....">
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @yield('content')

    <footer class="text-lg-start" style="background: #163342;padding-top:30px;color:white">
        <section class="">
            <div class="container text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">
                        <img src="{{ asset('images/logokemkes.png')}}">
                        <p>
                            Jl. HR. Rasuna Said Blok X5 Kav. 4-9, Jakarta Selatan 12950 <br>
                            Telp: (021) 52907416-9<br>
                            Halo Kemenkes: (kode lokal) 1-500567
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-8">
                        <h6 class="text-uppercase fw-bold mb-4">Tentang Kami</h6>
                        <p><a href="#!" class="text-reset">Program</a></p>
                        <p><a href="#!" class="text-reset">Karir</a></p>
                        <p><a href="#!" class="text-reset">Faq</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Ikuti Kami</h6>
                        <p>
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>