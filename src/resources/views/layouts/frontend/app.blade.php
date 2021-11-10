<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Protokol Kesehatan Bagi Masyarakat di Tempat dan Fasilitas Umum dalam rangka Pencegahan dan Pengendalian Corona Virus Disease 2019 (Covid-19)">

    <meta property="og:title" content="Protokol Kesehatan di Tempat Umum" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://prokes.kemkes.go.id/assets/img/og-image.png" />
    <meta property="og:url" content="https://prokes.kemkes.go.id/" />
    <meta property="og:description" content="Protokol Kesehatan Bagi Masyarakat di Tempat dan Fasilitas Umum dalam rangka Pencegahan dan Pengendalian Corona Virus Disease 2019 (Covid-19)">

    <!-- Bootstrap CSS -->
    {{-- <link href="{{asset('frontend')}}/assets/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>
    
    @include('layouts.frontend.navbar')
    
    @yield('content')

    @include('layouts.frontend.footer')

  </body>
</html>