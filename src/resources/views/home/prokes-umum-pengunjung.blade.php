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
          <h3>Pengunjung</h3>
          <ul class="padding-left">
            <li>Self-Assessment sebelum keluar rumah</li>
            <li>Kondisi sehat (Cek suhu tubuh < 37.5ºC)</li>
            <li>Menggunakan masker rangkap</li>
            <li>Hindari menyentuh area wajah</li>
            <li>Sering mencuci tangan menggunakan sabun/handsanitizer</li>
            <li>Minimalisir kontak fisik dengan orang lain</li>
            <li>Menjaga jarak minimal 1.5 meter</li>
          </ul>
          <div class="d-grid gap-2 py-5">
          <a href="/titik-kritis-penularan" class="btn btn-1 btn-lg">Titik Kritis Penularan COVID-19</a>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="pb-3">Lihat Juga</h5>
            <p>
          <a href="/prokes-umum-petugas">Protokol Kesehatan Umum di Tempat Publik untuk Petugas</a>
            </p>
            <p>
          <a href="/prokes-umum-pengelola">Protokol Kesehatan Umum di Tempat Publik untuk Pengelola</a>
        </p>
        </div>
      </div><!-- /row -->
  </div>
</section>

@endsection