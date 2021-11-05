@extends('layouts.app')
@section('title','Edit User')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Pengguna</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        {!! Form::model($user,['url'=>'admin/user/'.$user->id,'method'=>'PUT']) !!}
        @include('user.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection

