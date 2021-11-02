{!! Form::hidden('role', $_GET['role']) !!}
<?php
$uniq_id_label = $_GET['role']=='responden'?'NIK':'NIDN';
?>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleInputEmail1">{{ $uniq_id_label}} ( opsional )</label>
      {!! Form::text('uniq_id', null, ['class'=>'form-control','placeholder'=>$uniq_id_label]) !!}
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

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Fakultas</label>
    <input type="hidden" id="role" value="{{$_GET['role']}}">
      {!! Form::select('group_main_id',$group, null, ['class'=>'form-control fakultas']) !!}
    </div>
  </div>
  @if($_GET['role']=='responden')
  <div class="col-md-6">
    <label for="exampleInputEmail1">Prodi</label>
    <div id="prodi"></div>
  </div>
  @endif
</div>

@if($_GET['role']!='responden')
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Role</label>
    {!! Form::select('role',['user'=>'User/ Admin','dosen'=>'Dosen','layanan'=>'Unit Layanan','fakultas'=>'Fakultas'], null, ['class'=>'form-control']) !!}
  </div>
</div>
</div>
@else 
  {!! Form::hidden('role','responden') !!}
@endif


  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="/user?role={{$_GET['role']}}" class="btn btn-primary">Kembali</a>



@push('scripts')
<script>
$(document).ready(function(){
    $('.fakultas').bind('change', function () {
      var fakultas = $(".fakultas").val();
      var role = $("#role").val();
      $.ajax({
          url: "/ajax/subgroup",
          data: {
              fakultas: fakultas,
              role: role
          },
          cache: false,
          success: function (html) {
              $("#prodi").html(html);
          }
      });
    });
    $('.fakultas').trigger('change');
});
</script>
@endpush