<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'name',
        'type',
        'is_active',
        'order',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get all contents for this section.
     */
    public function contents()
    {
        return $this->hasMany(SectionContent::class);
    }

    /**
     * Get a specific content by key.
     */
    public function getContent($key)
    {
        return $this->contents()->where('key', $key)->first();
    }

    /**
     * Get content value by key.
     */
    public function getContentValue($key, $default = null)
    {
        $content = $this->getContent($key);
        return $content ? $content->value : $default;
    }

    /**
     * Update or create content.
     */
    public function updateContent($key, $value, $type = 'text')
    {
        return $this->contents()->updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'type' => $type,
            ]
        );
    }

    /**
     * Scope to get active sections only.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order by order column.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}