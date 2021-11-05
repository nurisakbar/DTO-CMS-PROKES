@extends('layouts.frontend.app')
@section('title','Artikel ' . $article->title)
@section('content')

<section class="bg-image-transportasi bg-image">
  <div class="bg-image-colour">
    <div class="container ">
      <div class="row text-center">
        <div class="col-12">
          <h1 class="title2">Protokol Kesehatan di Area {{ $article->category->category }}</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-5 mt-5">
  <div class="container">
    <div class="row pt-5">
      <div class="col-12">
        <h3>{!! $article->title !!}</h3>
        <p>{!! $article->content !!}</p>
      </div>
    </div>
  </div>
</section>

@endsection