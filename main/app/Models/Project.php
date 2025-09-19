<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'project_type',
        'year',
        'categories',
        'image',
        'is_featured',
        'position_order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'year' => 'integer',
        'position_order' => 'integer',
    ];

    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
        
        static::updating(function ($model) {
            if ($model->isDirty('title') && empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }

    // Relationships
    public function members()
    {
        return $this->belongsToMany(Member::class, 'member_project')
                    ->withPivot('order', 'role')
                    ->withTimestamps()
                    ->orderBy('member_project.order');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_category')
                    ->withTimestamps();
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('project_type', $type);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('position_order', 'asc')->orderBy('created_at', 'desc');
    }

    // Accessors
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset($this->image);
        }
        return asset('assets/images/projects/default-project.jpg');
    }

    public function getStatusDisplayAttribute()
    {
        $statuses = [
            'active' => 'Active',
            'completed' => 'Completed',
            'on_hold' => 'On Hold'
        ];
        
        return $statuses[$this->status] ?? 'Unknown';
    }

    public function getTypeDisplayAttribute()
    {
        $types = [
            'research' => 'Research Project',
            'development' => 'Development Project',
            'collaboration' => 'Collaboration Project'
        ];
        
        return $types[$this->project_type] ?? 'Project';
    }

    public static function getProjectStatuses()
    {
        return [
            'active' => 'Active',
            'completed' => 'Completed',
            'on_hold' => 'On Hold'
        ];
    }

    public static function getProjectTypes()
    {
        return [
            'research' => 'Research Project',
            'development' => 'Development Project',
            'collaboration' => 'Collaboration Project'
        ];
    }
}