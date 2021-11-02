@extends('layouts.app')
@section('title','Create New FAQ')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Bew FAQ</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        {!! Form::open(['url'=>'admin/faq']) !!}
        @include('faq.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection


