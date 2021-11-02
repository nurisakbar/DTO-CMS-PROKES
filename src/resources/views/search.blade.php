@extends('layout')
@section('title','Pencarian')
@section('content')
<div class="container" id="faq" style="margin-top: 50px;margin-bottom: 50px">
    <h4>Hasil Pencarian</h4>
    <p>Ada {{ $faqs->count() }} Data Dengan Keyword {{ $keyword }}</p>
    <div class="row">
        @foreach ($faqs->get() as $faq)
        <div class="col-md-12">
            <h4>{{ link_to('faq/'.$faq->slug,$faq->title)}}</h4>
            <p>{!! substr($faq->content,0,200) !!} ...</p>
        </div>
        @endforeach
    </div>
</div>
@endsection