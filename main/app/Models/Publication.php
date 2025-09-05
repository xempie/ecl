<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'authors',
        'journal',
        'conference',
        'year',
        'volume',
        'pages',
        'doi',
        'url',
        'download_url',
        'abstract',
        'type',
        'status',
        'image',
        'is_featured',
        'citation_count',
        'publication_date'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'citation_count' => 'integer',
        'year' => 'integer',
        'publication_date' => 'date',
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
        return $this->belongsToMany(Member::class, 'member_publication')
                    ->withPivot('order')
                    ->withTimestamps()
                    ->orderBy('member_publication.order');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'publication_category')
                    ->withTimestamps();
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeByYear($query, $year)
    {
        return $query->where('year', $year);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('year', 'desc')->orderBy('publication_date', 'desc');
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
        return asset('assets/images/publications/default-publication.jpg');
    }

    public function getTypeDisplayAttribute()
    {
        $types = [
            'journal' => 'Journal Article',
            'conference' => 'Conference Paper',
            'book_chapter' => 'Book Chapter',
            'workshop' => 'Workshop Paper',
            'preprint' => 'Preprint'
        ];
        
        return $types[$this->type] ?? 'Publication';
    }

    public function getStatusDisplayAttribute()
    {
        $statuses = [
            'published' => 'Published',
            'in_press' => 'In Press',
            'submitted' => 'Submitted',
            'under_review' => 'Under Review'
        ];
        
        return $statuses[$this->status] ?? 'Unknown';
    }

    public static function getPublicationTypes()
    {
        return [
            'journal' => 'Journal Article',
            'conference' => 'Conference Paper',
            'book_chapter' => 'Book Chapter',
            'workshop' => 'Workshop Paper',
            'preprint' => 'Preprint'
        ];
    }

    public static function getPublicationStatuses()
    {
        return [
            'published' => 'Published',
            'in_press' => 'In Press',
            'submitted' => 'Submitted',
            'under_review' => 'Under Review'
        ];
    }
}
