@extends('admin.layout.app')
@section('content')
    <div class="container-fluid container-p-y">
        <div class="card">
            <div class="card-body">
                <h4>Edit Product</h4>
                <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    @include('admin.product.partials.form', ['buttonText' => 'Update'])
                </form>
            </div>
        </div>
    </div>
@endsection
