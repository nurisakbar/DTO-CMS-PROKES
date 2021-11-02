@extends('layouts.app')
@section('title','Create New Category')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Category</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        {!! Form::open(['url'=>'admin/category','files'=>true]) !!}
        @include('category.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection


