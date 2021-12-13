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
        <h3>
        <?php
                          if(session::has('locale'))
                          {
                            echo session('locale')=='en'?$article->title_eng:$article->title;
                          } else{
                            echo $article->title;
                          } 
                          ?>
          </h3>
        <p>
        <?php
        if(session::has('locale'))
        {
          echo session('locale')=='en'?$article->content_eng:$article->content;
        } else{
          echo $article->content;
        } 
        ?>
        </p>
      </div>
    </div>
  </div>
</section>

@endsection