@extends('layout')
@section('title','Category '. $category->category)
@section('content')

<div class="container" id="faq" style="margin-top: 50px;margin-bottom: 50px">
    <h3 style="font-weight:bold">FAQ</h3>
    <h4> <img src="{{asset('storage/'.$category->icon)}}" class="icon-category-small"> {{ $category->category }}</h4>
    <div class="row">
        @foreach ($category->faq as $faq)
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 30px">
                <div class="card-body">
                    <p style="font-weight:bold">{{ link_to('faq/'.$faq->slug,$faq->title) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection