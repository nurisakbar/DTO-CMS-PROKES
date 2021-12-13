@extends('layouts.frontend.app')
@section('title','Artikel Prokes Umum Pengelola')
@section('content')

<section class="bg-image-transportasi bg-image">
  <div class="bg-image-colour">
    <div class="container ">
      <div class="row text-center">
        <div class="col-12">
          <h1 class="title2">@lang('static_content.prokes_ditempat_publik')</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-5 mt-5">
  <div class="container">
    <div class="row py-5">
        <div class="col-md-8">
          <h3>@lang('static_content.pengelola')</h3>
          <ul class="padding-left">
            <li>Membentuk tim satgas COVID</li>
            <li>Menerapkan kebijakan  pengaturan kapasitas orang dalam ruangan</li>
            <li>Pengaturan alur masuk keluar</li>
            <li>Mengatur jaga jarak minimal 1,5 meter dan memberi penanda jarak</li>
            <li>Menyediakan fasilitas cuci tangan pakai sabun dan/atau hand sanitizer di lokasi strategis</li>
            <li>Menyediakan alat pengukur suhu tubuh</li>
            <li>Mengoptimalkan sirkulasi udara yang baik</li>
            <li>Desinfeksi ruangan, alat/sarana prasarana dan area umum secara rutin minimal 3 kali sehari</li>
            <li>Menyediakan pengumuman jumlah maksimal pengguna fasilitas </li>
            <li>Menyediakan media informasi protokol kesehatan</li>
            <li>Mengatur jadwal operasional</li>
            <li>Menyediakan peralatan/sarana yang nirsentuh</li>
            <li>Mengupayakan transaksi non tunai</li>
            <li>Menyediakan ruang khusus/pos kesehatan </li>
            <li>Menyediakan sejumlah titik kumpul untuk kondisi darurat</li>
          </ul>
          <div class="d-grid gap-2 py-5">
          <a href="/titik-kritis-penularan" class="btn btn-1 btn-lg">@lang('static_content.titik_kritis_penularan_covid')</a>
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