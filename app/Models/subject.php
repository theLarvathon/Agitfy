<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
     protected $fillable = ['name', 'slug','code','category','order'];
    public function topic(): HasMany
    {
        return $this->hasMany(Topic::class)
            ->orderBy('number');
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

}
