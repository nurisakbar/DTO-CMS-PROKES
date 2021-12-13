@extends('layouts.frontend.app')
@section('title','Protokol Kesehatan Umum')
@section('content')
<section class="bg-ornament py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="h-100 p-u">
          <h1>@lang('static_content.hero_title')</h1>
          <p>@lang('static_content.hero_sub')</p>
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
                <p>@lang('static_content.perhub')</p>
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
          <h3>@lang('static_content.hero_title_2')</h3>
          @lang('static_content.hero_sub_2')

          <a href="preambul.html" class="btn btn-1">@lang('static_content.selengkapnya')</a>
        </div><!-- /col-md-6 -->          
      </div><!-- /row -->
    </div><!-- /container -->
  </section><!-- /info-protokol -->

  <section class="info-tempat-publik py-5">
    <div class="container">
      <div class="row text-center pb-4">
        <div class="col-md-12">           
          <h3 class="title">@lang('static_content.prokes_ditempat_publik')</h3>
        </div><!-- /col-md-12 -->
      </div><!-- /row -->
      <div class="row">
        <div class="col-md-4 pb-4">
          <img src="{{asset('frontend')}}/assets/img/img-wrapper1.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
          <h4>@lang('static_content.visitor')</h4>
          <p>@lang('static_content.visitor_deskripsi')</p>
          <a href="prokes-umum-pengunjung" class="btn btn-2">@lang('static_content.selengkapnya')</a>
        </div><!-- /col-4 -->
        <div class="col-md-4 pb-4">
          <img src="{{asset('frontend')}}/assets/img/img-wrapper-1.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
          <h4>@lang('static_content.petugas')</h4>
          <p>@lang('static_content.petugas_deskripsi')</p>
          <a href="prokes-umum-petugas" class="btn btn-2">@lang('static_content.selengkapnya')</a>
        </div><!-- /col-4 -->
        <div class="col-md-4 pb-4">
          <img src="{{asset('frontend')}}/assets/img/img-wrapper-2.png" class="img-fluid rounded pb-2" alt="Protokol Kesehatan">
          <h4>@lang('static_content.pengelola')</h4>
          <p>@lang('static_content.pengelola_deskripsi')</p>
          <a href="prokes-umum-pengelola" class="btn btn-2">@lang('static_content.selengkapnya')</a>
        </div><!-- /col-4 -->
      </div><!-- /row -->
    </div><!-- /container -->
  </section><!-- /info-tempat-publik -->

  <section class="info-tempat-publik py-5">
    <div class="container">
      <div class="row text-center pb-4">
        <div class="col-md-12">
        <h3 class="title">@lang('static_content.public_places_by_category')</h3>
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
          @lang('static_content.peduli_lindungi_description')
        </div><!-- /col-md-6 -->
      </div><!-- /row -->        
    </div><!-- /container -->
  </section><!-- /info-tempat-publik -->
@endsection