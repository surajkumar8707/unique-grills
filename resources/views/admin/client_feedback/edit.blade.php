@extends('admin.layout.app')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h4 class="card-title">Edit Client Feedback</h4>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-primary" href="{{ route('admin.client-feedback.index') }}">List</a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Please fix the following errors:
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.client-feedback.update', $clientFeedback->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $clientFeedback->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Location <span class="text-danger">*</span></label>
                    <input type="text" name="location" class="form-control" value="{{ old('location', $clientFeedback->location) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Comment <span class="text-danger">*</span></label>
                    <textarea name="comment" class="form-control" rows="4" required>{{ old('comment', $clientFeedback->comment) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.client-feedback.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
