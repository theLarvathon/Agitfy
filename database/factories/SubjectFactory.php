<?php

namespace Database\Factories;

use App\Models\subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends Factory<subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $title,
             'slug' => fn ($attributes) => Str::slug($attributes['title']),
        ];
    }
}
