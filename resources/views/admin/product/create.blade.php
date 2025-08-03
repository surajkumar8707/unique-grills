@extends('admin.layout.app')
@section('content')
    <div class="container-fluid container-p-y">
        <div class="card">
            <div class="card-body">
                <h4>Create Product</h4>
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.product.partials.form', ['buttonText' => 'Save'])
                </form>
            </div>
        </div>
    </div>
@endsection
