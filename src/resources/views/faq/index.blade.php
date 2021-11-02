@extends('layouts.app')
@section('title','FAQ')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">FAQ</h6>
    </div>
    <div class="card-body">
        @include('alert')
        <a href="/admin/faq/create" class="btn btn-danger">Add New FAQ</a>
        <hr>
        <table class="table table-bordered" id="users-table">
            <thead>
                <tr>
                    <th width="10">No</th>
                    <th>Title</th>
                    <th>Category</th>
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
        ajax: '/admin/faq',
        columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            { data: 'title', name: 'title' },
            { data: 'category.category', name: 'category.category' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush


