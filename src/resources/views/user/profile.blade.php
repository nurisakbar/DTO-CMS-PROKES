@extends('layouts.app')
@section('title','Ganti Password Pengguna')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ganti Password Pengguna</h6>
    </div>
    <div class="card-body">
        @include('validation_error')
        @include('failed')
        {!! Form::model($user,['url'=>'admin/user/'.$user->id.'/updatePassword','method'=>'POST']) !!}
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama User</label>
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nama Lengkap', 'disabled']) !!}
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Email', 'disabled']) !!}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Password Lama</label>
              <input type="password" name="current_password" class="form-control"  placeholder="Masukan password lama">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Password Baru</label>
              <input type="password" name="new_password" class="form-control"  placeholder="Masukan password baru">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
              <input type="password" name="confirm_new_password" class="form-control"  placeholder="Masukan konfirmasi password baru">
            </div>
          </div>
        </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
            <a href="{{url('admin/user')}}" class="btn btn-primary">Kembali</a>

        {!! Form::close() !!}
    </div>
</div>
@endsection


