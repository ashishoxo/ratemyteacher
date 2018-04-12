@extends('layouts.main')

@section('content')
{!! $dataTable->table([], true) !!}
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
<script type="text/javascript">
	$(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'https://datatables.yajrabox.com/eloquent/basic-data'
        });
    });
</script>
{!! $dataTable->scripts() !!}
@endpush

