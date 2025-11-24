<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename',
        'original_name',
        'mime_type',
        'size',
        'path',
        'type',
        'alt_text',
    ];

    /**
     * Get the full URL of the media file.
     */
    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }

    /**
     * Get human readable file size.
     */
    public function getHumanSizeAttribute()
    {
        $bytes = $this->size;
        $units = ['B', 'KB', 'MB', 'GB'];
        
        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }

    /**
     * Scope to get images only.
     */
    public function scopeImages($query)
    {
        return $query->where('type', 'image');
    }

    /**
     * Scope to get videos only.
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }

    /**
     * Delete media file from storage when model is deleted.
     */
    protected static function booted()
    {
        static::deleted(function ($media) {
            if (Storage::exists($media->path)) {
                Storage::delete($media->path);
            }
        });
    }
}