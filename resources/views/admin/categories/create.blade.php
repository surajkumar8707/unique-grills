@extends('admin.layout.app')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Categories create</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">List</a>
                    </div>
                </div>
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.categories.partials.form')
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
