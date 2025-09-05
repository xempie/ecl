<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Member extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'title',
        'email',
        'phone',
        'bio',
        'image',
        'lab_location',
        'member_category',
        'position_order',
        'status',
        'social_linkedin',
        'social_email',
        'social_website',
        'social_google_scholar',
        'research_interests',
        'qualifications',
        'achievements',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
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

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeByLab($query, $lab)
    {
        return $query->where('lab_location', $lab);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('member_category', $category);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('position_order', 'asc')->orderBy('name', 'asc');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset($this->image);
        }
        return asset('assets/images/team/default-avatar.jpg');
    }

    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'member_publication')
                    ->withPivot('order')
                    ->withTimestamps()
                    ->orderBy('year', 'desc');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'member_project')
                    ->withPivot('order', 'role')
                    ->withTimestamps()
                    ->orderBy('member_project.order');
    }

    public static function getMemberCategories()
    {
        return [
            'Lab Member' => 'Lab Member',
            'Virtual Intern' => 'Virtual Intern', 
            'Visiting Researcher' => 'Visiting Researcher',
            'Collaborator' => 'Collaborator',
            'PhD Student' => 'PhD Student',
        ];
    }
}
