<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug', 
        'description',
        'color',
        'is_active',
        'position_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'position_order' => 'integer',
    ];

    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
        
        static::updating(function ($model) {
            if ($model->isDirty('name') && empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }

    // Relationships
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'publication_category')
                    ->withTimestamps();
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_category')
                    ->withTimestamps();
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('position_order', 'asc')->orderBy('name', 'asc');
    }

    // Accessors
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getUsageCountAttribute()
    {
        return $this->publications()->count() + $this->projects()->count();
    }
}