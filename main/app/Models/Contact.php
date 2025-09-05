<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'ip_address',
        'user_agent',
        'replied_at',
        'replied_by'
    ];

    protected $casts = [
        'replied_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relationships
    public function repliedByUser()
    {
        return $this->belongsTo(User::class, 'replied_by');
    }

    // Scopes
    public function scopeUnread($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    public function scopeReplied($query)
    {
        return $query->where('status', 'replied');
    }

    // Accessors
    public function getStatusBadgeAttribute()
    {
        $statuses = [
            'new' => ['color' => 'blue', 'text' => 'New'],
            'read' => ['color' => 'yellow', 'text' => 'Read'],
            'replied' => ['color' => 'green', 'text' => 'Replied'],
            'archived' => ['color' => 'gray', 'text' => 'Archived'],
        ];

        return $statuses[$this->status] ?? ['color' => 'gray', 'text' => 'Unknown'];
    }

    public function getExcerptAttribute()
    {
        return \Illuminate\Support\Str::limit(strip_tags($this->message), 100);
    }

    // Static methods
    public static function getStatuses()
    {
        return [
            'new' => 'New',
            'read' => 'Read',
            'replied' => 'Replied',
            'archived' => 'Archived',
        ];
    }
}