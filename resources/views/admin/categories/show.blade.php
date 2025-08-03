@extends('admin.layout.app')
@section('content')
<div class="container">
    <h3>Category Details</h3>
    <p><strong>Name:</strong> {{ $categories->name }}</p>
    <p><strong>Slug:</strong> {{ $categories->slug }}</p>
    <p><strong>Description:</strong> {{ $categories->description }}</p>
    <p><strong>Status:</strong> {{ $categories->is_active ? 'Active' : 'Inactive' }}</p>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
