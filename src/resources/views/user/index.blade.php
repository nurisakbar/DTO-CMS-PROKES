@extends('layouts.app')
@section('title','Kelola User')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kelola {{$_GET['role']=='responden'?'Responden':'Object Survey'}}</h6>
    </div>
    <div class="card-body">
        @include('alert')
            <a href="/user/create?role={{$_GET['role']}}" class="btn btn-danger">Tambah {{$_GET['role']=='responden'?'Responden':'Object Survey'}}</a>
        <hr>
        <input type="hidden" id="role" value="{{$_GET['role']}}">
        <table class="table table-bordered" id="users-table">
            <thead>
                <tr>
                    <th>{{ $_GET['role']=='object_survey'?'NIDN':'NIM'}}</th>
                    <th>Nama Lengkap</th>
                    {{-- <th>Email</th> --}}
                    <th>Prodi / Unit</th>
                    <th width="60">#</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    var role= $("#role").val();
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/user?role='+role,
            columns: [
                { data: 'uniq_id', name: 'uniq_id' },
                { data: 'name', name: 'name' },
                // { data: 'email', name: 'email' },
                { data: 'group', name: 'group' },
                { data: 'action', name: 'action' }
            ]
        });
    });
</script>
@endpush

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush
