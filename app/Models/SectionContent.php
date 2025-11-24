<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionContent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_id',
        'key',
        'type',
        'value',
    ];

    /**
     * Get the section that owns the content.
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * Get value as decoded JSON if type is json.
     */
    public function getDecodedValueAttribute()
    {
        if ($this->type === 'json') {
            return json_decode($this->value, true);
        }
        return $this->value;
    }

    /**
     * Set value, encoding to JSON if array.
     */
    public function setValueAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['value'] = json_encode($value);
            $this->attributes['type'] = 'json';
        } else {
            $this->attributes['value'] = $value;
        }
    }
}