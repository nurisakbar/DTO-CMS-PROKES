@extends('layouts.app')
@section('title','Profile user')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile User</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        @include('alert')
        {!! Form::model($user,['url'=>'user/'.$user->id,'method'=>'PUT']) !!}
        {!! Form::hidden('page', 'profile') !!}
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Induk Mahasiswa</label>
                {!! Form::text('uniq_id', null, ['class'=>'form-control','placeholder'=>'NIK']) !!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama User/ Layanan</label>
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nama Lengkap']) !!}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Email']) !!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Password">
              </div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        {!! Form::close() !!}
    </div>
</div>
@endsection


