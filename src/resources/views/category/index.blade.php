@extends('layouts.app')
@section('title','Manage Category')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manage Category</h6>
    </div>
    <div class="card-body">
        @include('alert')
        <a href="/admin/category/create" class="btn btn-danger">Add New Category</a>
        <hr>
        <table class="table table-bordered" id="users-table">
            <thead>
                <tr>
                    <th width="10">No</th>
                    <th>Category Name</th>
                    <th>Icon</th>
                    <th width="70">#</th>
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
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/category',
        columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            { data: 'category', name: 'category' },
            { data: 'icon', name: 'icon' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush


