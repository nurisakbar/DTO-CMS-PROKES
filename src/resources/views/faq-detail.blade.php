@extends('layout')
@section('title',$faq->title)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <p>{{ link_to('/','Home')}} / {{ link_to('',$faq->category->category) }} / {{ $faq->title }}</p>
            <h3> {{ $faq->title }}</h3>
            <p class="text-justify">{!! $faq->content!!}</p>
        </div>
        <div class="col-md-3">
            <h4>Related FAQ</h4>
            @foreach($relateds as $related)
            <p> {{ link_to('faq/'.$related->slug , $related->title) }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection