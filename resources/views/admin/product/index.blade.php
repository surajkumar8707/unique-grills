@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header">
                <h4 class="card-title">Products</h4>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('change', '.change-status-input', function() {
            const id = $(this).data('product-id');
            $.post("{{ route('admin.ajax.product.change.status') }}", {
                id: id,
                status: this.checked ? 1 : 0
            }, function(resp) {
                resp.status === 'success' ? toastr.success(resp.message) : toastr.error(resp.message);
            });
        });
    </script>
    {{ $dataTable->scripts() }}
@endpush
