@extends('layout')
@section('title','Home')
@section('content')
<div class="container" style="margin-top: 50px">
    <h4>Cari Kategori</h4>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4" style="margin-bottom:20px;">
            <img src="{{asset('storage/'.$category->icon)}}" class="icon-category"> 
            <span class="category-label">{{ link_to('category/'.$category->slug,$category->category) }}</span>
        </div>
        @endforeach
    </div>
</div>

<div class="container" id="faq" style="margin-top: 50px;margin-bottom: 50px">
    <h4>Paling Sering Ditanyakan</h4>
    <div class="row">
        @foreach ($faqs as $faq)
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 30px;font-weight:700">
                <div class="card-body">
                    <p> 
                        <img src="{{asset('storage/'.$faq->category->icon)}}" class="icon-category-small">
                        {{ $faq->category->category}}</p>
                    <p style="font-weight:bold">{{ link_to('faq/'.$faq->slug,$faq->title) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection