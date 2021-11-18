@extends('layouts.frontend.app')
@section('title','Artikel Prokes Umum Pengelola')
@section('content')

<section class="bg-image-transportasi bg-image">
  <div class="bg-image-colour">
    <div class="container ">
      <div class="row text-center">
        <div class="col-12">
          <h1 class="title2">Protokol Kesehatan Umum di Tempat Publik</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-5 mt-5">
  <div class="container">
    <div class="row py-5">
        <div class="col-md-8">
          <h3>Titik Kritis Penularan</h3>
          <img src="{{ asset('frontend/assets/img/infograpis-min.png')}}" width="800">
          <div class="d-grid gap-2 py-5">
          <a href="/titik-kritis-penularan" class="btn btn-1 btn-lg">Titik Kritis Penularan COVID-19</a>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="pb-3">Lihat Juga</h5>
          <p><a href="/prokes-umum-pengunjung">Protokol Kesehatan Umum di Tempat Publik untuk Pengunjung</a></p>
          
          <p><a href="/prokes-umum-petugas">Protokol Kesehatan Umum di Tempat Publik untuk petugas</a></p>
          
        </div>
      </div><!-- /row -->
  </div>
</section>

@endsection