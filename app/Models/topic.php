<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class topic extends Model
{
    /** @use HasFactory<\Database\Factories\TopicFactory> */
    use HasFactory;
    protected $fillable = ['subject_id', 'title', 'slug','number'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(subject::class);
    }
    
    public function getNumberLabelAttribute(): string
    {
        return "Bab {$this->number}";
    }
    
}
