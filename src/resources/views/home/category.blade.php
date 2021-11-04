@extends('layouts.frontend.app')
@section('title',"Kategori $category")
@section('content')

<section class="bg-image-perkantoran bg-image">
    <div class=" bg-image-colour">
      <div class="container ">
        <div class="row text-center">
          <div class="col-12">
            <h1 class="title2">Protokol Kesehatan di {{ $category }}</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="info-protokol py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>Dalam situasi pandemi Covid-19 roda perekonomian harus tetap berjalan dengan mengedepankan langkah-langkah pencegahan. Dunia usaha dan masyarakat pekerja memiliki kontribusi besar dalam memutus mata rantai penularan karena besarnya jumlah populasi pekerja dan besarnya mobilitas, serta interaksi penduduk umumnya disebabkan aktifitas bekerja .</p>

          <p>Protokol kesehatan di {{ $category }} yang harus dilaksanakan terdiri dari protokol umum dan khusus.
            Seluruh pegawai, pengelola, ataupun pengunjung {{ $category }} yang datang wajib pada status Peduli Lindungi HIJAU dan berUSIA lebih dari 12 tahun.
            Seluruh pegawai, pengelola, ataupun pengunjung {{ $category }} yang datang wajib pada status Peduli Lindungi HIJAU atau KUNING dan berUSIA lebih dari 12 tahun.</p>
        </div><!-- /col-12  -->
      </div><!-- /row -->
    </div><!-- /container -->
  </section>

  <section class="py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($articles as $article)
            <a href="{{ url("article/$article->slug") }}" class="text-decoration-none text-dark">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('frontend')}}/assets/img/img-kantor-min.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
                        <div class="card-body">
                        <h5>{{ $article->title }}</h5>
                        <p class="card-text">{{ substr($article->content, 0, 80) }} ..</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
      </div>
    </div>
  </section>

@endsection