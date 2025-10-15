@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Category</label>
    <select name="category_id" class="form-control" required>
        @foreach ($categories as $id => $label)
            <option value="{{ $id }}"
                {{ old('category_id', $product->category_id ?? '') == $id ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" rows="3" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Price</label>
    <input type="number" step="0.01" name="price" class="form-control"
        value="{{ old('price', $product->price ?? '') }}">
    @error('price')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Stock</label>
    <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock ?? '') }}">
    @error('stock')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-check mb-3">
    <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
        {{ old('is_active', isset($product) && $product->is_active ? 'checked' : '') }}>
    <label class="form-check-label" for="is_active">Active</label>
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if (isset($product) && $product->image)
        <img src="{{ public_asset($product->image) }}" class="mt-2" width="100">
    @endif
    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<hr>
<h5>SEO Meta Details</h5>

<div class="mb-3">
    <label>Meta Title</label>
    <input type="text" name="meta_title" class="form-control"
        value="{{ old('meta_title', $product->meta_title ?? '') }}">
</div>

<div class="mb-3">
    <label>Meta Description</label>
    <input type="text" name="meta_description" class="form-control"
        value="{{ old('meta_description', $product->meta_description ?? '') }}">
</div>

<div class="mb-3">
    <label>Meta Keywords</label>
    <input type="text" name="meta_keywords" class="form-control"
        value="{{ old('meta_keywords', $product->meta_keywords ?? '') }}">
</div>

<div class="mb-3">
    <label>Meta Image</label>
    <input type="file" name="meta_image" class="form-control">
    @if (isset($product) && $product->meta_image)
        <img src="{{ public_asset($product->meta_image) }}" class="mt-2" width="100">
    @endif
</div>


<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Cancel</a>
