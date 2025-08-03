<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', @$category->name ?? '') }}" required>
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" rows="3" class="form-control">{{ old('description', @$category->description ?? '') }}</textarea>
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-check mb-3">
    <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
        {{ old('is_active', @$category && @$category->is_active ? 'checked' : '') }}>
    <label class="form-check-label" for="is_active">Active</label>
</div>
