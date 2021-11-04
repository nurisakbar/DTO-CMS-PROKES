@extends('layouts.app')
@section('title','Create New Article')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Article</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        {!! Form::open(['url'=>'admin/article', 'files' => true]) !!}
        @include('article.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection


