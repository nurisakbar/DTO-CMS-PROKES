@extends('layouts.app')
@section('title','Edit Article')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Article</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        {!! Form::model($article,['url'=>'admin/article/'.$article->id,'method'=>'PUT', 'files' => true]) !!}
        @include('article.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection
