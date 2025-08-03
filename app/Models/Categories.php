<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    // public function getRouteKeyName()
    // {
    //     return 'id';
    // }

    public function getDescriptionAttribute($value)
    {
        return $value ?: 'No description available.';
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getSlugAttribute($value)
    {
        return strtolower($value);
    }
    public function isActive()
    {
        return $this->is_active;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInactive($query)
    {
        return $query->where('is_active', false);
    }

    public function scopeWithSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public function scopeWithName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }

    public function scopeWithDescription($query, $description)
    {
        return $query->where('description', 'like', '%' . $description . '%');
    }

    public function scopeWithActiveStatus($query, $status)
    {
        return $query->where('is_active', $status);
    }

    public function scopeWithSoftDeletes($query)
    {
        return $query->withTrashed();
    }

    public function scopeWithoutSoftDeletes($query)
    {
        return $query->withoutTrashed();
    }

    public function scopeWithTimestamps($query)
    {
        return $query->with(['created_at', 'updated_at']);
    }

    public function scopeWithoutTimestamps($query)
    {
        return $query->without(['created_at', 'updated_at']);
    }

    public function scopeWithAll($query)
    {
        return $query->with(['name', 'slug', 'description', 'is_active']);
    }

    public function scopeWithoutAll($query)
    {
        return $query->without(['name', 'slug', 'description', 'is_active']);
    }
}
