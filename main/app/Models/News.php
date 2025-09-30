<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'status',
        'is_featured',
        'published_date',
        'author',
        'tags',
        'views_count',
        'meta_description',
        'meta_keywords',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'published_date' => 'date',
        'tags' => 'array',
        'views_count' => 'integer',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
            if (empty($model->published_date) && $model->status === 'published') {
                $model->published_date = now();
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('title') && empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
            if ($model->isDirty('status') && $model->status === 'published' && empty($model->published_date)) {
                $model->published_date = now();
            }
        });
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_date', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('published_date', 'desc')
                    ->orderBy('created_at', 'desc');
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
        return asset('assets/images/news/default-news.jpg');
    }

    public function getExcerptDisplayAttribute()
    {
        return $this->excerpt ?: Str::limit(strip_tags($this->content), 150);
    }

    public function getPublishedDateFormattedAttribute()
    {
        return $this->published_date ? $this->published_date->format('M d, Y') : null;
    }

    public function getStatusDisplayAttribute()
    {
        return ucfirst($this->status);
    }

    // Relationships
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_category')
                    ->withTimestamps();
    }

    // Mutators
    public function setTagsAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['tags'] = json_encode(array_map('trim', explode(',', $value)));
        } else {
            $this->attributes['tags'] = json_encode($value);
        }
    }
}
