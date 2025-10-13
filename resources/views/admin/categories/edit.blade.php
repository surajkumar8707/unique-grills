@extends('admin.layout.app')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Categories Edit</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">List</a>
                    </div>
                </div>
                <div class="container">
                    <form action="{{ route('admin.categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('admin.categories.partials.form')
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
