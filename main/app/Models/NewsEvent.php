<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class NewsEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'type',
        'status',
        'featured_image',
        'event_date',
        'event_time',
        'event_location',
        'event_url',
        'is_featured',
        'published_at',
        'author_id',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'event_date' => 'date',
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
            if (empty($model->published_at)) {
                $model->published_at = now();
            }
        });
        
        static::updating(function ($model) {
            if ($model->isDirty('title') && empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }

    // Relationships
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_event_category')
                    ->withTimestamps();
    }

    // Scopes
    public function scopeNews($query)
    {
        return $query->where('type', 'news');
    }

    public function scopeEvents($query)
    {
        return $query->where('type', 'event');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('type', 'event')
                     ->where('event_date', '>=', now()->toDateString());
    }

    public function scopePast($query)
    {
        return $query->where('type', 'event')
                     ->where('event_date', '<', now()->toDateString());
    }

    // Accessors
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }
        return Str::limit(strip_tags($this->content), 150);
    }

    public function getFormattedEventDateAttribute()
    {
        if (!$this->event_date) {
            return null;
        }
        return $this->event_date->format('F j, Y');
    }

    public function getFormattedEventTimeAttribute()
    {
        if (!$this->event_time) {
            return null;
        }
        return date('g:i A', strtotime($this->event_time));
    }

    public function getStatusBadgeAttribute()
    {
        $statuses = [
            'draft' => ['color' => 'yellow', 'text' => 'Draft'],
            'published' => ['color' => 'green', 'text' => 'Published'],
            'scheduled' => ['color' => 'blue', 'text' => 'Scheduled'],
            'archived' => ['color' => 'gray', 'text' => 'Archived'],
        ];

        return $statuses[$this->status] ?? ['color' => 'gray', 'text' => 'Unknown'];
    }

    public function getTypeBadgeAttribute()
    {
        $types = [
            'news' => ['color' => 'blue', 'text' => 'News', 'icon' => 'uil-newspaper'],
            'event' => ['color' => 'purple', 'text' => 'Event', 'icon' => 'uil-calendar-alt'],
        ];

        return $types[$this->type] ?? ['color' => 'gray', 'text' => 'Unknown', 'icon' => 'uil-question'];
    }

    // Static methods
    public static function getTypes()
    {
        return [
            'news' => 'News',
            'event' => 'Event',
        ];
    }

    public static function getStatuses()
    {
        return [
            'draft' => 'Draft',
            'published' => 'Published',
            'scheduled' => 'Scheduled',
            'archived' => 'Archived',
        ];
    }
}