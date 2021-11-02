@extends('layouts.app')
@section('title','Edit FAQ')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit FAQ</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        {!! Form::model($faq,['url'=>'admin/faq/'.$faq->id,'method'=>'PUT']) !!}
        @include('faq.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection
