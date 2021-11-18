@extends('layouts.frontend.app')
@section('title','Protokol Kesehatan Umum')
@section('content')
<section class="bg-ornament py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="h-100 p-u">
          <h1>Protokol Kesehatan di Tempat Umum</h1>
          <p>Adaptasi kebiasaan baru menuju masyarakat yang produktif dan aman terhadap COVID-19</p>
          </div>
        </div><!-- /col-md-6 -->
        <div class="col-md-6">
          <img src="{{asset('frontend')}}/assets/img/Group-41.png" class="img-fluid img-global" alt="Penerapan Protokol Kesehatan Umum"> 
        </div><!-- /col-md-6 -->
      </div><!-- /row -->     
    </div><!-- /container -->
    <div>
      <img src="{{asset('frontend')}}/assets/img/bintil.png" class="dotted">
    </div>
  </section><!-- /bg-ornament -->
  
  <section class="info-protokol">
    <div class="container">
      <div class="row kmk-wrapper text-center">
          <div class="col-12">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <p class="num">KMK RI No. HK 01.07/MENKES/382/2020 </p>
                <p>tentang Protokol Kesehatan Bagi Masyarakat di Tempat dan Fasilitas Umum dalam rangka Pencegahan dan Pengendalian Corona Virus Disease 2019 (Covid-19)</p>
              </div>
            </div>
          </div>
        </div><!-- /kmk-wrapper -->
    </div>
  </section>
  
  <section class="info-protokol py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('img-container2.jpg')}}" class="img-fluid" alt="Penerapan Protokol Kesehatan Umum">
        </div><!-- /col-md-6 -->
        <div class="col-md-6">
          <h3>Penerapan Protokol Kesehatan Umum</h3>
          <p>Kasus covid di Indonesia masih tinggi dengan statistik yang terus fluktuatif meskipun sudah lebih dari satu tahun pandemic. Hal menunjukkan penyebaran virus masih harus menjadi perhatian bersama. Seperti diketahui bahwa penularan dapat terjadi di setiap tempat dimana ada interaksi antar manusia. Di sisi lain, masyarakat terus beraktivitas untuk memenuhi kebutuhan hidupnya.</p>
          <p>Pemerintah melalui Kementerian Kesehatan telah menyusun serangkaian aturan untuk mengatur keamanan beraktivitas selama masa pandemic COVID-19. Tujuan diberlakukan protokol kesehatan adalah untuk membantu masyarakat tetap beraktivitas secara aman sekaligus tidak membahayakan kondisi kesehatan orang lain.</p>

          <a href="preambul.html" class="btn btn-1">Selengkapnya</a>
        </div><!-- /col-md-6 -->          
      </div><!-- /row -->
    </div><!-- /container -->
  </section><!-- /info-protokol -->

  <section class="info-tempat-publik py-5">
    <div class="container">
      <div class="row text-center pb-4">
        <div class="col-md-12">           
          <h3 class="title">Protokol Kesehatan Umum di Tempat Publik</h3>
        </div><!-- /col-md-12 -->
      </div><!-- /row -->
      <div class="row">
        <div class="col-md-4 pb-4">
          <img src="{{asset('frontend')}}/assets/img/img-wrapper1.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
          <h4>Pengunjung</h4>
          <p>Protokol Kesehatan Umum di tempat publik untuk Pengunjung</p>
          <a href="prokes-umum-pengunjung" class="btn btn-2">Selengkapnya</a>
        </div><!-- /col-4 -->
        <div class="col-md-4 pb-4">
          <img src="{{asset('frontend')}}/assets/img/img-wrapper-1.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
          <h4>Petugas</h4>
          <p>Protokol Kesehatan Umum di tempat publik untuk Petugas</p>
          <a href="prokes-umum-petugas" class="btn btn-2">Selengkapnya</a>
        </div><!-- /col-4 -->
        <div class="col-md-4 pb-4">
          <img src="{{asset('frontend')}}/assets/img/img-wrapper-2.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
          <h4>Pengelola</h4>
          <p>Protokol Kesehatan Umum di tempat publik untuk Pengelola</p>
          <a href="prokes-umum-pengelola" class="btn btn-2">Selengkapnya</a>
        </div><!-- /col-4 -->
      </div><!-- /row -->
    </div><!-- /container -->
  </section><!-- /info-tempat-publik -->

  <section class="info-tempat-publik py-5">
    <div class="container">
      <div class="row text-center pb-4">
        <div class="col-md-12">
        <h3 class="title">Tempat Publik Berdasarkan Kategori</h3>
        </div><!-- /col-md-12 -->
      </div><!-- /row -->
      <div class="row g-4 mb-4 row-cols-1 row-cols-lg-3 text-center">
        @foreach($categories as $category)
        <div class="col">
          <div>
            <a href="{{ url("category/$category->slug") }}">
              <div class="kategori">
                <img src="{{asset('frontend/assets/img/')}}/{{ $category->icon }}" class="img-fluid pb-4" alt="kategori">
                <h5>{{ $category->category }}</h5>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div><!-- /row kategori -->
    </div><!-- /container -->
  </section><!-- /info-tempat-publik -->

  <section class="info-tempat-publik py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pb-4">
            <div class="ratio ratio-16x9 ">
          
              <iframe src="https://www.youtube.com/embed/2hmI15CajEM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div><!-- /col-md-6 -->

        <div class="col-md-6 pb-4">
          <img src="{{asset('frontend')}}/assets/img/image 2.png" class="img-fluid pb-4" alt="PeduliLindungi">
          <p>PeduliLindungi adalah aplikasi yang dikembangkan untuk membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19)</p> 

          <p>Pengguna aplikasi ini juga akan mendapatkan notifikasi jika berada di keramaian atau berada di zona merah, yaitu area atau kelurahan yang sudah terdata bahwa ada orang yang terinfeksi COVID-19 positif atau ada Pasien Dalam Pengawasan.</p>
        </div><!-- /col-md-6 -->
      </div><!-- /row -->        
    </div><!-- /container -->
  </section><!-- /info-tempat-publik -->
@endsection