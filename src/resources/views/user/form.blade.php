<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Pengguna</label>
      {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nama Lengkap']) !!}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label for="exampleInputEmail1">Alamat Email</label>
      {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Email']) !!}
    </div>
  </div>
  @if(Request::segment(3) == 'create')
  <div class="col-md-12">
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Password']) !!}
    </div>
  </div>
  @else
  {!! Form::hidden('password', null) !!}
  @endif

</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{url('admin/user')}}" class="btn btn-primary">Kembali</a>
